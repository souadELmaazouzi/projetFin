<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDashbord;
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
Route::resource('/processus', 'ControllerProcessus');

/*Route::get('/Processus',[ControllerDashbord::class,'List_Processus']);*/
/*Route::get('/Etapes',[ControllerDashbord::class,'list_Etapes']);
Route::get('/Risque',[ControllerDashbord::class,'list_Risque']);
Route::get('/admin',[ControllerDashbord::class,'login']);
Route::get('/Ressource',[ControllerDashbord::class,'RessourceListe']);
Route::get('/Processus',[ControllerProcessus::class,'index']);*/
/*Route::get('/Processus',[ControllerDashbord::class,'store']);*/
/*Route::get('/Processus', [ControllerDashbord::class, 'create']);
Route::post('/Processus', [ControllerDashbord::class, 'store']);*/