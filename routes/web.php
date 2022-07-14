<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/user-form', function () {
    return view('admin.users.user');
});
Route::get('/create-order-form', function () {
    return view('admin.orders.create_order');
});
Route::get('/create-product-form', function () {
    return view('admin.users.create_product');
});
Route::get('/edit-order-form', function () {
    return view('admin.orders.edit_order');
});
Route::get('/login-form', function () {
    return view('admin.login');
});
Route::get('/user-detail-form', function () {
    return view('admin.users.user_detail');
});
Route::get('/create-order1-form', function () {
    return view('admin.orders.create_order1');
});
Route::get('/create-order2-form', function () {
    return view('admin.orders.create_order2');
});
Route::get('/user-table', function () {
    return view('admin.users.user_table');
});
Route::get('/product-list', function () {
    return view('admin.products.product_list');
});
Route::get('/user-list', function () {
    return view('admin.users.user_list');
});
Route::get('/order-list', function () {
    return view('admin.orders.order_list');
});
Route::get('/multi-step', function () {
    return view('admin.orders.multi_step');
});

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
