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

Route::get('/', 'TebeController@index');

Route::post('auth/login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('profil', 'TebeController@profil');
Route::get('sub_properti', 'TebeController@sub_properti');
Route::get('sub_kursus', 'TebeController@sub_kursus');
Route::get('gantipass', 'TebeController@gantipass');
Route::get('caritempat', 'TebeController@caritempat');
Route::get('carikursus', 'TebeController@carikursus');
Route::get('test', 'TebeController@test');
Route::get('edit_properti', 'TebeController@edit_properti');
Route::get('masuk_daftar', 'TebeController@masuk_daftar');

Route::post('seemore_tempat', 'TebeController@tambahpropertisave');
Route::get('properti', 'TebeController@properti');
Route::get('detailproperti/{id}', 'TebeController@detailproperti');
Route::get('detailtempat/{id}', 'TebeController@detailtempat');
Route::post('detailtempat/{id}', 'TebeController@pesantempat');

Route::get('propertiedit/{id}', 'TebeController@propertiedit');
Route::post('propertiupdate', 'TebeController@propertiupdate');
Route::get('propertihapus/{id}', 'TebeController@propertihapus');

Route::post('seemore_kursus', 'TebeController@tambahkursussave');
Route::get('kursus', 'TebeController@kursus');
Route::get('detailkursus/{id}', 'TebeController@detailkursus');

Route::get('detail_kursus/{id}', 'TebeController@detail_kursus');
Route::post('detail_kursus/{id}', 'TebeController@pesankursus');

Route::get('kursusedit/{id}', 'TebeController@kursusedit');
Route::post('kursusupdate', 'TebeController@kursusupdate');
Route::get('kursushapus/{id}', 'TebeController@kursushapus');

Route::get('notif', 'TebeController@notif');
Route::get('notif_kursus', 'TebeController@notif_kursus');
Route::get('notif_pelajar', 'TebeController@notif_pelajar');
Route::post('daftar', 'TebeController@daftar');

Route::get('setujutempat/{id}', 'TebeController@setujutempat');
Route::get('tolaktempat/{id}', 'TebeController@tolaktempat');

Route::get('setujukursus/{id}', 'TebeController@setujukursus');
Route::get('tolakkursus/{id}', 'TebeController@tolakkursus');
