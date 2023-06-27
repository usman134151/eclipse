<?php

namespace App\Debugbar;

use Barryvdh\Debugbar\DataCollector\MemoryCollector;
use Barryvdh\Debugbar\DataCollector\QueryCollector;
use Livewire\LivewireManager;

class LivewireQueryCollector extends QueryCollector
{
    protected $livewireManager;

    public function __construct(LivewireManager $livewireManager)
    {
        $this->livewireManager = $livewireManager;
        parent::__construct();
    }

    public function collect()
    {
        parent::collect();

        foreach ($this->livewireManager->getComponents() as $component) {
            $queries = $component->getConnection()->getQueryLog();
            $this->addQueries($queries);
        }
    }
}
