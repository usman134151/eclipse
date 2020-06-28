<?php

namespace App\Http\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use Stancl\Tenancy\Resolvers\DomainTenantResolver;

class FallbackDomain extends Component
{
    public $domain = '';

    public function mount()
    {
        $this->domain = tenant()->fallback_domain->domain;
    }

    public function save()
    {
        $this->validate([
            // todo regex only alpha
            'domain' => ['required', 'string', Rule::unique('central.domains')->ignoreModel(tenant()->fallback_domain), 'not_regex:/\\./'],
        ]);

        if ($this->domain === tenant()->fallback_domain->domain) {
            return; // No action
        }

        $oldFallback = tenant()->fallback_domain;

        $newFallback = tenant()->createDomain($this->domain)->makeFallback();

        // We'll be deleting the old fallback domain. So if it was
        // the primary domain, we'll make the one one primary
        if ($oldFallback->is_primary) {
            $newFallback->makePrimary();
        }

        // In our setup, we only allow tenants to have one subdomain.
        // We don't want them squatting multiple subdomains.
        $oldFallback->delete();

        $this->emit('domainsUpdated');

        $this->domain = '';

        // If we were visiting the old fallback, which was deleted,
        // we'll redirect the user to the primary domain.
        if ($oldFallback->is(DomainTenantResolver::$currentDomain)) {
            redirect(tenant()->route('tenant.settings.application'));
        }
    }

    public function render()
    {
        return view('livewire.tenant.fallback-domain');
    }
}