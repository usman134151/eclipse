<?php

namespace App;

use App\Exceptions\DomainCannotBeChangedException;
use Stancl\Tenancy\Database\Models\Domain as BaseDomain;
use Illuminate\Support\Str;

class Domain extends BaseDomain
{
    protected $casts = [
        'is_primary' => 'bool',
        'is_fallback' => 'bool',
    ];

    public static function booted()
    {
        static::updating(function (self $model) {
            if ($model->getAttribute('domain') !== $model->getOriginal('domain')) {
                throw new DomainCannotBeChangedException;
            }
        });

        static::saved(function (self $domain) {
            if (
                $domain->is_primary &&
                $domain->tenant->primary_domain &&
                $domain->tenant->primary_domain->getKey() !== $domain->getKey()
            ) {
                $domain->tenant->primary_domain->update(['is_primary' => false]);
            }

            if (
                $domain->is_fallback &&
                $domain->tenant->fallback_domain &&
                $domain->tenant->fallback_domain->getKey() !== $domain->getKey()
            ) {
                $domain->tenant->fallback_domain->update(['is_fallback' => false]);
            }
        });
    }

    public static function domainFromSubdomain(string $subdomain): string
    {
        return $subdomain . '.' . config('tenancy.central_domains')[0];
    }

    public function makePrimary(): self
    {
        $this->update([
            'is_primary' => true,
        ]);

        $this->tenant->setRelation('primary_domain', $this);

        return $this;
    }

    public function makeFallback(): self
    {
        $this->update([
            'is_fallback' => true,
        ]);

        $this->tenant->setRelation('fallback_domain', $this);

        return $this;
    }

    public function isSubdomain(): bool
    {
        return ! Str::contains($this->domain, '.');
    }

    /**
     * Get the domain type.
     * Returns 'subdomain' or 'domain'.
     *
     * @return string
     */
    public function getTypeAttribute(): string
    {
        return $this->isSubdomain() ? 'subdomain' : 'domain';
    }
}
