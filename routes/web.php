<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;



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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::GET('/', [CrudController::class, 'home'])->name('home');
Route::POST('/task/store/ajax', [CrudController::class, 'taskStore'])->name('task.store');
Route::POST('/task/list/ajax', [CrudController::class, 'taskList'])->name('task.list');
Route::POST('/task/inprogress/ajax', [CrudController::class, 'inProgress'])->name('task.inprogress');
Route::POST('/task/done/ajax', [CrudController::class, 'done'])->name('task.done');



