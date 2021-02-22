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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', function () {
    return 'Hola mundo!';
});
*/

/*
Route::get('/', function () {
    return [
        'Clases' => [
            'Instalación Laravel',
            'Routes de Laravel',
            'Views de Laravel'
        ]
    ];
});
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notas', function () {
    $notas = DB::table('notas')->get();
    return view('notas', ['notas' => $notas]);
})->name('notas.index');

Route::get('agregar', function () {
    return view('agregar');
});

Route::get('notas/{id}/editar', function ($id) {
    $nota = DB::table('notas')
    ->where('id', $id)
    ->first();
    //return 'Aquí se van a editar las notas' .$id;
    return view('editar', ['nota' => $nota]);
})->name('notas.edit');
