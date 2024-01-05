<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

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

// Default route is the one below

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [ToDoListController::class, 'index'] );

Route::post('/saveItem', [ToDoListController::class, 'saveItem'])-> name('saveItem');
Route::post('/markComplete/{id}', [ToDoListController::class, 'markComplete'])-> name('markComplete');