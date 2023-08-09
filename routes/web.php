<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/inscription/cycle','App\Http\Controllers\InscriptionController@ChoixCycle')->name('Inscri.ChoixCycle');
Route::get('/inscription/ClasseDispo{id?}','App\Http\Controllers\InscriptionController@ClasseDispo')->name('Inscri.ClasseDispo');
//Route::get('/inscription/idClasse','App\Http\Controllers\InscriptionController@getById')->name('Inscri.Classeid');
Route::post('/inscription/parent','App\Http\Controllers\InscriptionController@parentForm')->name('Inscri.parent');

//route problème ajax
//Route::post('/inscription/Classe','App\Http\Controllers\InscriptionController@findId');









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