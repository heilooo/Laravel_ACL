<?php

use App\Http\Controllers\User;
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
Route::get('/', [User::class, 'index'])->name('user.index')->middleware('acl:superAdmin,user.index');
Route::get('/create', [User::class, 'create'])->name('user.create');
Route::post('/store', [User::class, 'store'])->name('user.store');
Route::get('/show/{user}', [User::class, 'show'])->name('user.show');
Route::get('/edit/{user}', [User::class, 'edit'])->name('user.edit');
Route::post('/update/{user}', [User::class, 'update'])->name('user.update');
Route::delete('/destroy/{user}', [User::class, 'destroy'])->name('user.destroy');
