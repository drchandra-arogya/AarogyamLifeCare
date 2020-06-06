<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','admin']], function (){
    Route::get('/admin', function () {
        return view('admin');
    });
    Route::get('/admin/user/index','Admin\UserController@index');
    Route::get('/admin/user/create','Admin\UserController@create');
    Route::get('/admin/user/edit','Admin\UserController@edit');

    Route::get('/admin/patients/patientList','Admin\UserController@patientList');

});

Route::group(['middleware'=>['auth','doctor']], function (){
    Route::get('/doctor', function () {
        return view('doctor');
    });
});
Route::get('/custom-register-doctor','CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('/custom-register-doctor','CustomAuthController@register');

Route::get('/custom-login-doctor','CustomAuthController@showLoginForm')->name('custom.login');
Route::post('/custom-login-doctor','CustomAuthController@login');

Route::group(['middleware'=>['auth','patient']], function (){
    // Route::get('/patient', function () {
    //     return view('patient');
    // });
    Route::get('/patient','PatientController@patientProfile');
    Route::get('/patientProfileEdit/{id}','PatientController@patientProfileEdit');

    Route::post('/patientProfileUpdate','PatientController@patientProfileUpdate');
//    Route::get('/patientIndex','PatientController@patientIndex');
});

Route::get('/patient-register','PatientAuthController@showPatientRegisterForm')->name('patientauth.register');
Route::post('/patient-register','PatientAuthController@patientRegister');


Route::get('/patient-login','PatientAuthController@showPatientLoginForm')->name('patientauth.login');
Route::post('/patient-login','PatientAuthController@patientLogin');

