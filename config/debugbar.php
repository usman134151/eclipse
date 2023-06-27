<?php

return [

    /*
    |--------------------------------------------------------------------------
    | DebugBar Enable/Disable
    |--------------------------------------------------------------------------
    |
    | You can explicitly enable or disable the DebugBar here.
    |
    */

    'enabled' => env('DEBUGBAR_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | DebugBar Storage Driver
    |--------------------------------------------------------------------------
    |
    | The storage driver used by the DebugBar to store collected data.
    |
    | Supported: 'file', 'pdo', 'custom', 'null'
    |
    */

    'storage' => [
        'driver' => 'file',
        'path' => storage_path('debugbar'),
        'connection' => null,
        'provider' => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | DebugBar Collectors
    |--------------------------------------------------------------------------
    |
    | The collectors used by the DebugBar to collect data.
    |
    */

    'collectors' => [
        'queries' => true,
        'livewire'=>true,
        'App\Debugbar\LivewireQueryCollector',
        // Other collectors
    ],

];
