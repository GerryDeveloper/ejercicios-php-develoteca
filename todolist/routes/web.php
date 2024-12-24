<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Taskcontroller;

// Route::get('/', function () {
/*
Route::get('/', function () {
    // return view('welcome');
    return view('task.index');
}); */

// ojo, la ruta no debe apuntar a la funcion, sino al controlador ya definido en app/Http

// podemos acceder a las rutas a travez del archvo web.php para manipular todas las rutas que el usuario solicita

// Route::post('/', function () {
//     print_r($_POST);
// });

Route::get('/', [TaskController::class, 'index']);
Route::post('/', [TaskController::class, 'store']);

Route::delete('/{id}', [Taskcontroller::class,'destroy'])->name('task.destroy') ; // delete en lugar de post