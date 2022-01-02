<?php

use App\Http\Controllers\IndexController;
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
Route::get('/admin/product', function () {
    return view('adminProducts');
});



// Login
Route::get('/login', function () {
    return view('login');
});





