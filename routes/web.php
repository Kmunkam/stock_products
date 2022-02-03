<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductComtroller;

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
//     return 'HELLO';
// });

// Route::get('/', [IndexController::class, 'index']);


Route::get('/', function () {
    return view('employeeHome');
});
Route::get('/home', function () {
    return view('employeeHome');
});
Route::get('/product', function () {
    return view('employeeProducts');
});
Route::get('/addProducts', function () {
    return view('employeeAddProducts');
});
Route::get('/updateProducts', function () {
    return view('employeeUpdateProducts');
});

// Admin
Route::get('/admin', function () {
    return view('adminHome');
});
Route::get('/admin/home', function () {
    return view('adminHome');
});
Route::get('/admin/userManagement', function () {
    return view('adminUserManagement');
});
Route::get('/admin/userManagement/addUser', function () {
    return view('adminAddUser');
});
Route::get('/admin/userManagement/editUser', function () {
    return view('adminEditUser');
});
Route::get('/admin/product', function () {
    return view('adminProducts');
});
Route::get('/admin/addProducts', function () {
    return view('adminAddProducts');
});
Route::get('/admin/updateProducts', function () {
    return view('adminUpdateProducts');
});


//-----------------------------------------------------
Route::resource('products', ProductComtroller::class);


// Login
Route::get('/login', function () {
    return view('login');
});





