<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/agent-form', function () {
    return view('admin.users.agent');
});
Route::get('/account-form', function () {
    return view('admin.users.account');
});
Route::get('/manager-form', function () {
    return view('admin.users.manager');
});
Route::get('/team-leader-form', function () {
    return view('admin.users.team_leader');
}); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/create-order', [App\Http\Controllers\OrdersController::class, 'create_order'])->name('create_order');
Route::get('/order-list', [App\Http\Controllers\OrdersController::class, 'order_list'])->name('order_list');

Route::get('/product-list', [App\Http\Controllers\ProductsController::class, 'product_list'])->name('product_list');
Route::get('/create-product', [App\Http\Controllers\ProductsController::class, 'create_product'])->name('create_product');
//User
Route::get('/user-list', [App\Http\Controllers\UsersController::class, 'user_list'])->name('user_list');
Route::get('/create-user', [App\Http\Controllers\UsersController::class, 'create_user'])->name('create_user');
Route::POST('/add_user_details', [App\Http\Controllers\UsersController::class, 'add_user_details'])->name('add_user_details');
Route::GET('/edit-user/{id}', [App\Http\Controllers\UsersController::class, 'edit_user'])->name('edit_user');
Route::GET('/destroy_user_details/{id}', [App\Http\Controllers\UsersController::class, 'destroy_user_details'])->name('destroy_user_details');

Route::get('/export-invoice', [App\Http\Controllers\InvoiceController::class, 'export_invoice'])->name('export_invoice');
Route::get('/invoice-list', [App\Http\Controllers\InvoiceController::class, 'invoice_list'])->name('invoice_list');


Route::get('/announcements-index', [App\Http\Controllers\AnnouncementsController::class, 'announcements_index'])->name('announcements_index');
Route::get('/manage-announcements', [App\Http\Controllers\AnnouncementsController::class, 'manage_announcements'])->name('manage_announcements');


Route::get('/create-category', [App\Http\Controllers\CategoryController::class, 'create_category'])->name('create_category');
Route::get('/category-list', [App\Http\Controllers\CategoryController::class, 'category_list'])->name('category_list');