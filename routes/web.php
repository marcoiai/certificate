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

Route::get('/', 'Controller@home');

Route::get('/pdf/{certificate}', 'PDFController@pdf')->name('pdf');

Route::get('/form', 'PDFController@form');

Route::get('/test', 'PDFController@test');

Route::get('/client/list', 'ClientController@list')->name('client-list');
Route::get('/client/create', 'ClientController@create')->name('client-create');
Route::post('/client/new', 'ClientController@new')->name('client-new');
Route::get('/client/edit/{client}', 'ClientController@edit')->name('client-edit');

Route::get('/certificate/list', 'CertificateController@list')->name('certificate-list');
Route::get('/certificate/create', 'CertificateController@create')->name('certificate-create');
Route::post('/certificate/new', 'CertificateController@new')->name('certificate-new');
Route::get('/certificate/edit/{certificate}', 'CertificateController@edit')->name('certificate-edit');

Route::get('/product/list', 'ProductController@list')->name('product-list');
Route::get('/product/create', 'ProductController@create')->name('product-create');
Route::post('/product/new', 'ProductController@new')->name('product-new');
Route::get('/product/edit/{product}', 'ProductController@edit')->name('product-edit');

Route::get('/contract/list', 'ContractController@list')->name('contract-list');
Route::get('/contract/create', 'ContractController@create')->name('contract-create');
Route::post('/contract/new', 'ContractController@new')->name('contract-new');
Route::get('/contract/edit/{contract}', 'ContractController@edit')->name('contract-edit');

Route::get('/packing/list', 'PackingController@list')->name('packing-list');
Route::get('/packing/create', 'PackingController@create')->name('packing-create');
Route::post('/packing/new', 'PackingController@new')->name('packing-new');
Route::get('/packing/edit/{packing}', 'PackingController@edit')->name('packing-edit');

Route::get('/label/list', 'LabelController@list')->name('label-list');
Route::get('/label/create', 'LabelController@create')->name('label-create');
Route::post('/label/new', 'LabelController@new')->name('label-new');
Route::get('/label/edit/{label}', 'LabelController@edit')->name('label-edit');

Route::get('/certificate_temperature/list', 'CertificateTemperatureController@list')->name('certificate_temperature-list');
Route::get('/certificate_temperature/create', 'CertificateTemperatureController@create')->name('certificate_temperature-create');
Route::post('/certificate_temperature/new', 'CertificateTemperatureController@new')->name('certificate_temperature-new');
Route::get('/certificate_temperature/edit/{certificate_temperature}', 'CertificateTemperatureController@edit')->name('certificate_temperature-edit');
