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

Route::get('/test', 'Controller@test');
Route::get('/config', 'Controller@config');

Route::post('/user/register', 'UserController@register');
Route::post('/user/login', 'UserController@login');
Route::post('/user/update', 'UserController@update');
Route::post('/user/stats', 'UserController@stats');
Route::post('/user/location/update', 'UserController@updateLatLong');
Route::post('/user/device/update', 'UserController@updateDevice');


Route::post('/constant/update', 'ConstantsController@update')->name('edit_constant');

Route::post('/main/status', 'MainController@getStatus');


Route::get('/foggings/view/all', 'FoggingController@index');
Route::get('/hospitals/view/all', 'HospitalController@index');
Route::get('/dangers/view/all', 'DangerController@index');

Route::post('/blood/view/recieved/request', 'RequestController@recievedRequest');
Route::post('/blood/view/sent/request', 'RequestController@sendRequest');
Route::post('/blood/request/add', 'RequestController@addRequest');
Route::post('/blood/request/delete', 'RequestController@deleteRequest');
Route::post('/blood/request/accept', 'RequestController@acceptRequest');
Route::post('/blood/request/users', 'RequestController@getNearByUsers');
Route::post('/dangers/view/hotspots', 'DangerController@getHotspots');

Route::post('/report/fogging', 'FoggingController@reportFogging');
Route::post('/report/danger', 'DangerController@reportDanger');

Route::post('/fogging/upload', 'FoggingController@foggingDataUpload')->name('fogging_data_upload');
Route::post('/dangers/patients/upload', 'DangerController@patientDataUpload')->name('patients_data_upload');
Route::post('/dangers/challans/upload', 'DangerController@challansDataUpload')->name('challans_data_upload');
Route::post('/city/areas/view', 'LocationController@fetchAreas')->name('fetch_areas');

Route::get('/alerts/{id}', 'MainController@submitReport')->name('risk');

Route::get('/tip/get', 'TipController@getTip');
Route::post('/tip/add', 'TipController@addTip');

Route::get('/danger', 'MainController@getCityDetails');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
