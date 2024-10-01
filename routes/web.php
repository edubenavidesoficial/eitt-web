<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/cursos', 'web/cursos');
Route::view('/nosotros', 'web/nosotros');
Route::view('/preguntas', 'web/preguntas');
Route::view('/contactos', 'web/contactos');
Route::view('/plataformas', 'web/plataformas');
Route::view('/condiciones-de-uso', 'web/condiciones-de-uso');
Route::view('/politica-de-privacidad', 'web/politica-de-privacidad');