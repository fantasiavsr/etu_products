<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'index']);

/* Route::get('/list_products', function () {
    return view('list_products', ['title' => 'List Produk']);
}); */

Route::get('/list_products', [Controller::class, 'list_produk']);

Route::get('/detail_produk1', function () {
    return view('detail_produk/detail_produk1', ['title' => 'Risol Mayo Yummy']);
});

Route::get('detail_produk/{id}', [Controller::class, 'detail_produk'])->name('detail_produk');

Route::get('admin-item', [Controller::class, 'list_item'])->middleware('auth', 'admin')->name('admin.item');
Route::get('admin-item/{id}', [Controller::class, 'edit_item'])->middleware('auth', 'admin')->name('admin.edit.item');
Route::post('admin-item', [Controller::class, 'update_item'])->middleware('auth', 'admin')->name('admin.update.item');
Route::get('admin-createitem', [Controller::class, 'create_item'])->middleware('auth', 'admin')->name('admin.create.item');
Route::post('admin-createitem', [Controller::class, 'store_item'])->middleware('auth', 'admin')->name('admin.store.item');
Route::delete('admin-deleteitem/{id}', [Controller::class, 'delete_item'])->middleware('auth', 'admin')->name('admin.delete.item');

/* login page */
Route::get('/login', [Controller::class, 'loginIndex'])->name('login');
Route::post('/login', [Controller::class, 'authenticate'])->name('login');
Route::post('/logout', [Controller::class, 'logout'])->name('logout');

Route::resource('user', UserController::class)->middleware('auth', 'user', 'admin', 'subadmin');


Route::get('/alumni13', [Controller::class, 'alumni1']);
Route::get('/alumni14', [Controller::class, 'alumni2']);
Route::get('/alumni15', [Controller::class, 'alumni3']);
Route::get('/alumni16', [Controller::class, 'alumni4']);
Route::get('/alumni17', [Controller::class, 'alumni5']);
Route::get('/alumni19', [Controller::class, 'alumni6']);
