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

Route::get('/layout/',function(){ 
    return view('evaluation.optionEtape1');
});
