<?php

use Hanafalah\ModuleMonitoring\Controllers\API\ModelHasMonitoring\ModelHasMonitoringController;
use Illuminate\Support\Facades\Route;

Route::apiResource('model-has-monitoring', ModelHasMonitoringController::class)
    ->parameters(['model-has-monitoring' => 'id']);