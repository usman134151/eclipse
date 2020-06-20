<?php

namespace App;

use App\Exceptions\NoPrimaryDomainException;
use Laravel\Cashier\Billable;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains, Billable;

    protected $casts = [
        'trial_ends_at' => 'datetime',
    ];

    public static function getCustomColumns(): array
    {
        return [
            'email',
            'stripe_id',
            'card_brand',
            'card_last_four',
            'trial_ends_at',
        ];
    }

    public function primary_domain()
    {
        return $this->hasOne(Domain::class)->where('is_primary', true);
    }

    public function route($route, $parameters = [], $absolute = true)
    {
        if (! $this->primary_domain) {
            throw new NoPrimaryDomainException;
        }

        $domain = $this->primary_domain->domain;
        
        $parts = explode('.', $domain);
        if (count($parts) === 1) { // If subdomain
            $domain = $domain . '.' . config('tenancy.central_domains')[0];
        }

        return tenant_route($domain, $route, $parameters, $absolute);
    }
}
