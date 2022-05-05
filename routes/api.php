<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', [TasksController::class, 'get']);               // タスク一覧取得
Route::get('/tasks/{taskId}', [TaskController::class, 'get']);       // タスク取得
Route::post('/tasks', [TaskController::class, 'post']);              // タスク登録
Route::put('/tasks/{taskId}', [TaskController::class, 'put']);       // タスク更新
Route::delete('/tasks/{taskId}', [TaskController::class, 'delete']); // タスク削除