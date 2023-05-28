<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */
Route::get('/', function () {
    return view('welcome', ['name' => 'Samantha']);
});
// Route::get('/hello/{key}', [DemoController::class, 'DemoAction'])->middleware([DemoMiddleware::class]);
// Route::get('/hello2', [DemoController::class, 'DemoAction2']);
// Route::middleware(['demo'])->group(function () {
//     Route::get("/hello1/{key}", [DemoController::class, 'DemoAction']);
//     Route::get("/hello2/{key}", [DemoController::class, 'DemoAction2']);
//     Route::get("/hello3/{key}", [DemoController::class, 'DemoAction3']);
//     Route::get("/hello4/{key}", [DemoController::class, 'DemoAction4']);
// });
// Route::get("/hello", [DemoController::class, 'DemoAction'])->middleware([DemoMiddleware::class]);
Route::get('/hello',[DemoController::class,'DemoAction'])->middleware('throttle:5,1');
