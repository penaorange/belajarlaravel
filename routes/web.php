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
// cara route biasa
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = "Ilham Anugrah !!";
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// cara route controller
// url , namacontroller@namamethod
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');

Route::post('/students', 'StudentsController@store');
// url yang ada parameter nya disimpen dibawah
Route::get('/students/{student}', 'StudentsController@show');
