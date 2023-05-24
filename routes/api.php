<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CameraController;
use App\Http\Controllers\LensaController;
use App\Http\Controllers\FullkitController;

route::get('/camera', [CameraController::class, 'getApi']);
route::get('/lensa', [LensaController::class, 'getApi']);
route::get('/fulkit', [FullkitController::class, 'getApi']);
