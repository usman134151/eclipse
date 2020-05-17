<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Stancl\Tenancy\Database\Models\Domain as BaseDomain;

class Domain extends BaseDomain
{
    protected $casts = [
        'is_primary' => 'bool',
    ];

    public function makePrimary()
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
    }
}
