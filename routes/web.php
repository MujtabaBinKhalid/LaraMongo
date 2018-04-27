<?php

use App\User;
use App\Http\Middleware;
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

Route::get('/', 'RegistrationController@welcome')->name('outer');
  
Auth::routes();

Route::get('/home', 'StudentController@index')-> name('main') ;

Route::get('/create', 'StudentController@create');

Route::post('/store', 'StudentController@store');

Route::post('/savedata', 'RegistrationController@created');
    
Route::post('/login', 'RegistrationController@login');

Route::get('/edituser/{eid}','StudentController@editrecord');

Route::post('/updatingrecord','StudentController@updatingrecord');

Route::get('/deleteuser/{id}','StudentController@deleterecord');

Route:: get('/surveyform', 'surveyController@survey');

Route::post('/storingsurveydata', 'surveyController@surveydata');

Route::get('/surveyresult', 'surveyController@displayinggraph');

Route::get('/logout', 'RegistrationController@logout');


Route::post('/language', array(

        'Middleware'=> 'LanguageSwitcher',
        'uses'=> 'LanguageCon@index'
));


