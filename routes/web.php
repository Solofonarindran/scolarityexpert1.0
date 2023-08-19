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
Route::get('/re/inf/','ReinscritController@index')->name('info.reinscri');
Route::post('/re/p_id/','App\Http\Controllers\ReinscritController@getClasseSuiv')->name('classeSuiv');
Route::post('/re/e/add/','App\Http\Controllers\ReinscritController@store')->name('ajoutReinscrit');


//route evaluation
Route::get('/ev/opt/','App\Http\Controllers\EvaluationController@index')->name('option');
Route::get('/ev/opt/ch{opt?}/opt','App\Http\Controllers\EvaluationController@choixClasseExam')->name('choix.classe.exam');
Route::post('/ev/opt/pst','App\Http\Controllers\EvaluationController@postClasseExam')->name('postClasseExam');
Route::post('/ev/mt/dsp/pst','App\Http\Controllers\EvaluationController@postMatiereDispo')->name('postMatiereDispo');
Route::post('/ev/add/','App\Http\Controllers\EvaluationController@add')->name('add.note');
Route::post('/ev/up/','App\Http\Controllers\EvaluationController@edit')->name('update.note');

    //route résultat
    Route::get('/ev/res/opt/','App\Http\Controllers\ResultatController@index')->name('resultat.option');

    //Gle
    Route::get('/ev/res/gle/ch/','App\Http\Controllers\ResultatController@choixGle')->name('resultat.choixGle');
    Route::get('/ev/res/{opt?}/','App\Http\Controllers\ResultatController@option')->name('response.option');
    Route::post('/ev/res/clex/pst','App\Http\Controllers\ResultatController@postClasseExam')->name('postClasseExamResultat');
    Route::post('/ev/res/cl/pst','App\Http\Controllers\ResultatController@postClasse')->name('postClasseResultat');

    //Particulier
    Route::post('/ev/res/i/search/','App\Http\Controllers\ResultatController@researchInscrit')->name('resultat.recherche');
    Route::get('/ev/{id?}/resp/','App\Http\Controllers\ResultatController@bulletin')->name('response.recherche');



