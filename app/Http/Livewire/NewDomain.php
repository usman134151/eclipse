<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewDomain extends Component
{
    public $domain = '';

    public function save()
    {
        $this->validate([
            'domain' => ['required', 'string', 'unique:central.domains', 'regex:/\\./'],
        ]);

        tenant()->createDomain($this->domain);

        $this->emit('domainsUpdated');

        $this->domain = '';
    }

    public function render()
    {
        return view('livewire.tenant.new-domain');
    }
}
