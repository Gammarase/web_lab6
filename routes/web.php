<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FunctionalityController;

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
Route::get('/logout', [AuthController::class,'logout']);
Route::get('/login', [AuthController::class,'loginPage'])->name('login');
Route::get('/price', [AuthController::class,'pricePage']);
Route::get('/registration', [AuthController::class,'registrationPage']);
Route::get('/dashboard', [Controller::class,'dashboard'])->middleware('auth');
Route::get('/dashboard/order_archive', [Controller::class,'archive'])->middleware('auth');
Route::get('/dashboard/available_roles', [Controller::class,'available_roles_page'])->middleware('auth');
Route::get('/dashboard/new_order', [Controller::class,'add_order_page'])->middleware('auth');
Route::get('/', [Controller::class, 'getPage']);
Route::get('/{pagename}', [Controller::class, 'getPage']);
Route::get('/user/{userid}', [Controller::class, 'findUser'])->middleware('auth');
Route::get('/role/{roleid}', [Controller::class, 'findRole'])->middleware('auth');

Route::post('/login', [AuthController::class,'login']);
Route::post('/registration', [AuthController::class,'registration']);
Route::post('/dashboard/add_role', [FunctionalityController::class,'add_role'])->middleware('auth');
Route::post('/dashboard/add_order', [FunctionalityController::class,'add_order'])->middleware('auth');
Route::post('/dashboard/remove_role', [FunctionalityController::class,'remove_role'])->middleware('auth');

