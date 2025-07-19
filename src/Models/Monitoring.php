<?php

namespace Hanafalah\ModuleMonitoring\Models;

use Hanafalah\LaravelSupport\Models\BaseModel;
use Hanafalah\ModuleMonitoring\Resources\Monitoring\{ViewMonitoring, ShowMonitoring};

class Monitoring extends BaseModel
{

    public function viewUsingRelation(): array
    {
        return [];
    }

    public function showUsingRelation(): array
    {
        return ['parent'];
    }

    public function getShowResource(){
        return ShowMonitoring::class;
    }

    public function getViewResource()
    {
        return ViewMonitoring::class;
    }
}
