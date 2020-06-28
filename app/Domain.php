<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Stancl\Tenancy\Database\Models\Domain as BaseDomain;
use Illuminate\Support\Str;

class Domain extends BaseDomain
{
    protected $casts = [
        'is_primary' => 'bool',
        'is_fallback' => 'bool',
    ];

    public static function domainFromSubdomain(string $subdomain): string
    {
        return $subdomain . '.' . config('tenancy.central_domains')[0];
    }

    public function makePrimary(): self
    {
        DB::transaction(function () {
            // Make any previous primary domains secondary
            $this->tenant->domains()->update([
                'is_primary' => false,
            ]);

            $this->update([
                'is_primary' => true,
            ]);
        }, 2);

        $this->tenant->setRelation('primary_domain', $this);

        return $this;
    }

    public function makeFallback(): self
    {
        DB::transaction(function () {
            // Make any previous fallback domains normal
            $this->tenant->domains()->update([
                'is_fallback' => false,
            ]);

            $this->update([
                'is_fallback' => true,
            ]);
        }, 2);

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
