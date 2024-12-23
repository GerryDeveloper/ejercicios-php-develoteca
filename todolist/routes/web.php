<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
Route::get('/', function () {
    // return view('welcome');
    return view('task.index');
});

// ojo, la ruta no debe auntar a la funcion, sino al controlador ya definido en app/Http

// podemos acceder a las rutas a travez del archvo web.php para manipular todas las rutas que el usuario solicita
