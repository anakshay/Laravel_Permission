<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VedioesController;
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
    return view('welcome');
});
route::get('/file',[VedioesController::class,'file_form']);
route::get('/files',[VedioesController::class,'file_show']);
route::post('/file',[VedioesController::class,'save_data']);



route::get('/logins',[SignUpController::class,'login_view'])->name('logins');
route::post('/logins',[SignUpController::class,'login']);

route::get('/registers',[SignUpController::class,'register_view'])->name('registers');
route::post('/registers',[SignUpController::class,'register']);

