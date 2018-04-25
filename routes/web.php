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
