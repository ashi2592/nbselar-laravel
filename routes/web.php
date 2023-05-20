<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\back\LoginController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\ProductController;
use App\Http\Controllers\back\UserController;
use App\Http\Controllers\back\NoticeController;
use App\Http\Controllers\back\CKEditorController;
use App\Http\Controllers\back\CompanydetailsController;
use App\Http\Controllers\back\CategoryController;
use App\Http\Controllers\back\CustomerController;



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
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', [LoginController::class, 'index']);
Route::post('/admin-login', [LoginController::class, 'login'])->name('admin-login');

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);


//User
Route::get('/user',[App\Http\Controllers\back\UserController::class, 'index'])->name('user.index');
Route::get('/user/create',[App\Http\Controllers\back\UserController::class, 'create'])->name('user.create');
Route::get('/user/edit/{id}',[App\Http\Controllers\back\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/store',[App\Http\Controllers\back\UserController::class, 'store'])->name('user.store');
Route::post('/user/update/{id}',[App\Http\Controllers\back\UserController::class, 'update'])->name('user.update');
Route::get('/user/show/{id}',[App\Http\Controllers\back\UserController::class, 'show'])->name('user.show');
Route::post('/user/destroy/{id}',[App\Http\Controllers\back\UserController::class, 'destroy'])->name('user.destroy');

//Notice
Route::get('/notice',[App\Http\Controllers\back\NoticeController::class, 'index'])->name('notice.index');
Route::get('/notice/create',[App\Http\Controllers\back\NoticeController::class, 'create'])->name('notice.create');
Route::get('/notice/edit/{id}',[App\Http\Controllers\back\NoticeController::class, 'edit'])->name('notice.edit');
Route::post('/notice/store',[App\Http\Controllers\back\NoticeController::class, 'store'])->name('notice.store');
Route::post('/notice/update/{id}',[App\Http\Controllers\back\NoticeController::class, 'update'])->name('notice.update');
Route::get('/notice/show/{id}',[App\Http\Controllers\back\NoticeController::class, 'show'])->name('notice.show');
Route::post('/notice/destroy/{id}',[App\Http\Controllers\back\NoticeController::class, 'destroy'])->name('notice.destroy');

//ckeditor
Route::post('/ckeditor/upload',[App\Http\Controllers\back\CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

//Create
Route::get('/company',[App\Http\Controllers\back\CompanydetailsController::class, 'index'])->name('company.index');
Route::post('/company/store/{id}',[App\Http\Controllers\back\CompanydetailsController::class, 'store'])->name('company.store');

//Product
Route::get('/product',[App\Http\Controllers\back\ProductController::class, 'index'])->name('product.index');
Route::get('/product/create',[App\Http\Controllers\back\ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{id}',[App\Http\Controllers\back\ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/store',[App\Http\Controllers\back\ProductController::class, 'store'])->name('product.store');
Route::post('/product/update/{id}',[App\Http\Controllers\back\ProductController::class, 'update'])->name('product.update');
Route::get('/product/show/{id}',[App\Http\Controllers\back\ProductController::class, 'show'])->name('product.show');
Route::post('/product/destroy/{id}',[App\Http\Controllers\back\ProductController::class, 'destroy'])->name('product.destroy');

//Category
Route::get('/category',[App\Http\Controllers\back\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create',[App\Http\Controllers\back\CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}',[App\Http\Controllers\back\CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/store',[App\Http\Controllers\back\CategoryController::class, 'store'])->name('category.store');
Route::post('/category/update/{id}',[App\Http\Controllers\back\CategoryController::class, 'update'])->name('category.update');
Route::get('/category/show/{id}',[App\Http\Controllers\back\CategoryController::class, 'show'])->name('category.show');
Route::post('/category/destroy/{id}',[App\Http\Controllers\back\CategoryController::class, 'destroy'])->name('category.destroy');


//expense
Route::get('/expense',[App\Http\Controllers\back\ExpenseController::class, 'index'])->name('expense.index');
Route::get('/expense/create',[App\Http\Controllers\back\ExpenseController::class, 'create'])->name('expense.create');
Route::get('/expense/edit/{id}',[App\Http\Controllers\back\ExpenseController::class, 'edit'])->name('expense.edit');
Route::post('/expense/store',[App\Http\Controllers\back\ExpenseController::class, 'store'])->name('expense.store');
Route::post('/expense/update/{id}',[App\Http\Controllers\back\ExpenseController::class, 'update'])->name('expense.update');
Route::get('/expense/show/{id}',[App\Http\Controllers\back\ExpenseController::class, 'show'])->name('expense.show');
Route::post('/expense/destroy/{id}',[App\Http\Controllers\back\ExpenseController::class, 'destroy'])->name('expense.destroy');


//expense
Route::get('/customers',[App\Http\Controllers\back\CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create',[App\Http\Controllers\back\CustomerController::class, 'create'])->name('customers.create');
Route::get('/customers/edit/{id}',[App\Http\Controllers\back\CustomerController::class, 'edit'])->name('customers.edit');
Route::post('/customers/store',[App\Http\Controllers\back\CustomerController::class, 'store'])->name('customers.store');
Route::post('/customers/update/{id}',[App\Http\Controllers\back\CustomerController::class, 'update'])->name('customers.update');
Route::get('/customers/show/{id}',[App\Http\Controllers\back\CustomerController::class, 'show'])->name('customers.show');
Route::post('/customers/destroy/{id}',[App\Http\Controllers\back\CustomerController::class, 'destroy'])->name('customers.destroy');
