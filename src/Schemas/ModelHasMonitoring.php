<?php

namespace Hanafalah\ModuleMonitoring\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Hanafalah\ModuleMonitoring\{
    Supports\BaseModuleMonitoring
};
use Hanafalah\ModuleMonitoring\Contracts\Schemas\ModelHasMonitoring as ContractsModelHasMonitoring;
use Hanafalah\ModuleMonitoring\Contracts\Data\ModelHasMonitoringData;

class ModelHasMonitoring extends BaseModuleMonitoring implements ContractsModelHasMonitoring
{
    protected string $__entity = 'ModelHasMonitoring';
    public $model_has_monitoring_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'model_has_monitoring',
            'tags'     => ['model_has_monitoring', 'model_has_monitoring-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreModelHasMonitoring(ModelHasMonitoringData $model_has_monitoring_dto): Model{
        $add = [
            'name' => $model_has_monitoring_dto->name
        ];
        $guard  = ['id' => $model_has_monitoring_dto->id];
        $create = [$guard, $add];
        // if (isset($model_has_monitoring_dto->id)){
        //     $guard  = ['id' => $model_has_monitoring_dto->id];
        //     $create = [$guard, $add];
        // }else{
        //     $create = [$add];
        // }

        $model_has_monitoring = $this->usingEntity()->updateOrCreate(...$create);
        $this->fillingProps($model_has_monitoring,$model_has_monitoring_dto->props);
        $model_has_monitoring->save();
        return $this->model_has_monitoring_model = $model_has_monitoring;
    }
}