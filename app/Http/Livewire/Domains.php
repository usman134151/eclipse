<?php

namespace App\Http\Livewire;

use App\Domain;
use Livewire\Component;

class Domains extends Component
{
    protected $listeners = ['domainsUpdated' => '$refresh'];

    public function makePrimary($domain)
    {
        /** @var Domain $domain */
        $domain = tenant()->domains()->where('id', $domain)->first();

        if ($domain) {
            $domain->makePrimary();
        }
    }

    public function delete($domain)
    {
        tenant()->domains()->where('id', $domain)->delete();
    }

    public function render()
    {
        return view('livewire.tenant.domains');
    }
}
