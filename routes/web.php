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
Auth::routes();


Route::get('/', function () {
    return view('auth.login');
});
Route::group(['middleware' => 'auth'], function () { 
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





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/create-order', [App\Http\Controllers\OrdersController::class, 'create_order'])->name('create_order');
Route::get('/order-list', [App\Http\Controllers\OrdersController::class, 'order_list'])->name('order_list');


//User
Route::get('/user-list', [App\Http\Controllers\UsersController::class, 'user_list'])->name('user_list');
Route::get('/create-user', [App\Http\Controllers\UsersController::class, 'create_user'])->name('create_user');
Route::POST('/add_user_details', [App\Http\Controllers\UsersController::class, 'add_user_details'])->name('add_user_details');
Route::GET('/edit-user/{id}', [App\Http\Controllers\UsersController::class, 'edit_user'])->name('edit_user');
Route::GET('/destroy_user_details/{id}', [App\Http\Controllers\UsersController::class, 'destroy_user_details'])->name('destroy_user_details');

//Category

Route::GET('/create-category', [App\Http\Controllers\CategoriesController::class, 'create_category'])->name('create_category');
Route::POST('/add_category_details', [App\Http\Controllers\CategoriesController::class, 'add_category_details'])->name('add_category_details');
Route::GET('/category-list', [App\Http\Controllers\CategoriesController::class, 'category_list'])->name('admin.category_list');
Route::GET('/edit_category/{id}', [App\Http\Controllers\CategoriesController::class, 'edit_category'])->name('edit_category');
Route::GET('/destroy_category/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy_category'])->name('destroy_category');

//Product
Route::GET('/product_list', [App\Http\Controllers\ProductsController::class, 'product_list'])->name('product_list');
Route::GET('/create-product', [App\Http\Controllers\ProductsController::class, 'create_product'])->name('create_product');
Route::POST('/add_product_details', [App\Http\Controllers\ProductsController::class, 'add_product_details'])->name('add_product_details');
Route::GET('/edit_product/{id}', [App\Http\Controllers\ProductsController::class, 'edit_product'])->name('edit_product');
Route::GET('/destroy_product_details/{id}', [App\Http\Controllers\ProductsController::class, 'destroy_product_details'])->name('destroy_product_details');




Route::get('/user-list', [App\Http\Controllers\UsersController::class, 'user_list'])->name('user_list');
Route::get('/user-details', [App\Http\Controllers\UsersController::class, 'user_details'])->name('user_details');
Route::get('/user-profile', [App\Http\Controllers\UsersController::class, 'user_profile'])->name('user_profile');

Route::get('/export-invoice', [App\Http\Controllers\InvoiceController::class, 'export_invoice'])->name('export_invoice');
Route::get('/invoice-list', [App\Http\Controllers\InvoiceController::class, 'invoice_list'])->name('invoice_list');


Route::get('/announcements-index', [App\Http\Controllers\AnnouncementsController::class, 'announcements_index'])->name('announcements_index');
Route::get('/manage-announcements', [App\Http\Controllers\AnnouncementsController::class, 'manage_announcements'])->name('manage_announcements');





});