<?php

namespace Hanafalah\ModuleMonitoring\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleMonitoring\Contracts\Data\ModelHasMonitoringData as DataModelHasMonitoringData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class ModelHasMonitoringData extends Data implements DataModelHasMonitoringData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public string $name;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;
}