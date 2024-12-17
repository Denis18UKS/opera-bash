<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/allEvents', [UserController::class, 'allEvents'])->name('allEvents');
Route::get('/allNews', [UserController::class, 'allNews'])->name('allNews');
Route::get('/newsShow/{id}', [UserController::class, 'newsShow'])->name('newsShow');
Route::get('/eventShow/{id}', [UserController::class, 'eventShow'])->name('eventShow');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/signin', [UserController::class, 'signin_show'])->name('signin_show');

Route::post('/signin', [UserController::class, 'signin'])->name('signin');
Route::post('/addNews', [UserController::class, 'addNews'])->name('addNews');

Route::get('/admin/adminIndex', [UserController::class, 'adminIndex'])->name('adminIndex');
Route::get('/admin/adminEvent', [UserController::class, 'adminEvent'])->name('adminEvent');
Route::get('/edit-news/{id}', [UserController::class, 'editNewsForm'])->name('editNewsForm');

Route::post('/edit-news/{id}', [UserController::class, 'editNews'])->name('editNews');
Route::post('/admin_poster_add', [UserController::class, 'admin_poster_add'])->name('admin_poster_add');
Route::post('/admin_poster_edit_post', [UserController::class, 'admin_poster_edit_post'])->name('admin_poster_edit_post');

Route::get('/edit-event/{id}', [UserController::class, 'editEventForm'])->name('editEventForm');
Route::post('/edit-event/{id}', [UserController::class, 'editEvent'])->name('editEvent');



