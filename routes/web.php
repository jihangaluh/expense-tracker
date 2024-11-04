<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;


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

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan daftar expenses (index)
Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');

// Route untuk menampilkan form tambah expense (create)
Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');

// Route untuk menyimpan data expense baru ke database (store)
Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');

// Route untuk menampilkan form edit expense (edit)
Route::get('/expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');

// Route untuk memperbarui data expense di database (update)
Route::put('/expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');

// Route untuk menghapus expense (destroy)
Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');