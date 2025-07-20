<?php

namespace Hanafalah\ModuleMonitoring\Controllers\API\ModelHasMonitoring;

use Hanafalah\ModuleMonitoring\Contracts\Schemas\ModelHasMonitoring;
use Hanafalah\ModuleMonitoring\Controllers\API\ApiController;
use Hanafalah\ModuleMonitoring\Requests\API\ModelHasMonitoring\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ModelHasMonitoringController extends ApiController{
    public function __construct(
        protected ModelHasMonitoring $__modelhasmonitoring_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__modelhasmonitoring_schema->viewModelHasMonitoringList();
    }

    public function store(StoreRequest $request){
        return $this->__modelhasmonitoring_schema->storeModelHasMonitoring();
    }

    public function destroy(DeleteRequest $request){
        return $this->__modelhasmonitoring_schema->deleteModelHasMonitoring();
    }
}