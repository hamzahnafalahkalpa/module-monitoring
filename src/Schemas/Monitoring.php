<?php

namespace Hanafalah\ModuleMonitoring\Schemas;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleMonitoring\Contracts;

class Monitoring extends PackageManagement implements Contracts\Schemas\Monitoring
{
    protected string $__entity = 'Monitoring';
    public static $monitoring_model;

    protected array $__cache = [
        'index' => [
            'name'     => 'monitoring',
            'tags'     => ['monitoring', 'monitoring-index'],
            'duration'  => 24*60*7
        ]
    ];
}
