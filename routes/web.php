<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::view("login","login");

//Route::redirect("login","home", 302);

//php artisan make:controller TestController
Route::get("test", TestController::class)->name("test");

Route::fallback(function () {
    return "Route not found 404";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/persons', App\Http\Controllers\PersonsController::class)->name('persons');


// Patterns routes
Route::get('/singleton', [App\Http\Controllers\Patterns\SingletonController::class, 'index'])->name('singleton');
Route::get('/factory', [App\Http\Controllers\Patterns\FactoryController::class, 'index'])->name('factory');
Route::get('/factorymethod', [App\Http\Controllers\Patterns\FactorymethodController::class, 'index'])->name('factorymethod');
Route::get('/staticfactory', [App\Http\Controllers\Patterns\StaticfactoryController::class, 'index'])->name('staticfactory');
Route::get('/abstractfactory', [App\Http\Controllers\Patterns\AbstractfactoryController::class, 'index'])->name('abstractfactory');
