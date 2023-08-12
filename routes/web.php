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



Route::get('/cl/dash/','App\Http\Controllers\ClasseController@showDashboard')->name('classe.show');
Route::post('/cl/add/{id?}','App\Http\Controllers\ClasseController@store')->name('classe.store');
Route::post('/cl/edit/','App\Http\Controllers\ClasseController@update')->name('classe.edit');
//route ajax
Route::post('/Cl/getbyId','App\Http\Controllers\ClasseController@getByIdAjax')->name('classe.ajax');


// route inscription
Route::get('/ins/cycle','App\Http\Controllers\InscriptionController@ChoixCycle')->name('Inscri.ChoixCycle');
Route::get('/ins/Cl/Dispo{id?}','App\Http\Controllers\InscriptionController@ClasseDispo')->name('Inscri.ClasseDispo');
Route::post('/ins/cl/','App\Http\Controllers\InscriptionController@choixclasse')->name('classechoisie');
Route::post('/ins/par/','App\Http\Controllers\GeniteurController@createParentInscrit')->name('postparent');
Route::post('/ins/id_pat','App\Http\Controllers\InscriptionController@PassParentId')->name('passidparent');
Route::post('ins/e/add','App\Http\Controllers\EleveController@createEleveInscription')->name('ajouteleveInscrit');



//route réinscription
Route::get('/re/search','App\Http\Controllers\ReinscritController@search')->name('reinscri.search');
Route::get('/re/inf/','App\Http\Controllers\ReinscritController@index')->name('info.reinscri');





/*Route::get('/v/',function(){
    return view('inscription.infoParentEtape3');
});


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

});*/



