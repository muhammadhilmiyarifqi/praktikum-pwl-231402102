<?php

use App\Http\Controllers\TodoTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoTaskController::class, 'index']);

Route::post('/', [TodoTaskController::class, 'tambah']);

Route::delete('/delete/{id}', [TodoTaskController::class, 'hapus']);



// Route::get('/', function () {
//     return view('home');
// });

// Route::post('/', function () {
//     return 'Halaman Post';
// });
