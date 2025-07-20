<?php

namespace Hanafalah\ModuleMonitoring\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\ModuleMonitoring\Resources\ModelHasMonitoring\{
    ViewModelHasMonitoring,
    ShowModelHasMonitoring
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class ModelHasMonitoring extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;
    
    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'name',
        'props',
    ];

    protected $casts = [
        'name' => 'string'
    ];

    

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewModelHasMonitoring::class;
    }

    public function getShowResource(){
        return ShowModelHasMonitoring::class;
    }

    

    
}
