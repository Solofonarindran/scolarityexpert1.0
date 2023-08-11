<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeniteurController;
use App\Http\Controllers\InscriptionController;

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



Route::get('/classe/dash/','App\Http\Controllers\ClasseController@showDashboard')->name('classe.show');
Route::post('/classe/add/{id?}','App\Http\Controllers\ClasseController@store')->name('classe.store');
Route::post('/classe/edit/','App\Http\Controllers\ClasseController@update')->name('classe.edit');
//route ajax
Route::post('/Classe/getbyId','App\Http\Controllers\ClasseController@getByIdAjax')->name('classe.ajax');



Route::get('/ins/cycle','App\Http\Controllers\InscriptionController@ChoixCycle')->name('Inscri.ChoixCycle');
Route::get('/ins/ClasseDispo{id?}','App\Http\Controllers\InscriptionController@ClasseDispo')->name('Inscri.ClasseDispo');

Route::post('/ins/choixclasse','App\Http\Controllers\InscriptionController@choixclasse')->name('choixclasse');
Route::post('/ins/parent','App\Http\Controllers\GeniteurController@createParentInscrit')->name('dataparentpost');
Route::post('/ins/id_parent','App\Http\Controllers\InscriptionController@PassParentId')->name('passidparent');
Route::post('/eleve/add','App\Http\Controllers\InscriptionController@createEleveInscription')->name('ajouteleveInscrit');











Route::get('/', function () {


    // Read File

    $jsonString = file_get_contents(base_path('/public/data.json'));

    $data = json_decode($jsonString, true);


    // Update Key

    $data['country.title'] = "Change Manage Country";


    // Write File

    $newJsonString = json_encode($data, JSON_PRETTY_PRINT);

    file_put_contents(base_path('public/data.json'), stripslashes($newJsonString));


    // Get Key Value

    dd(__('country.title'));

});