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

Auth::routes();

Route::get('/admin', [App\Http\Controllers\Back\LoginController::class, 'index']);
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Front\AboutController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\Front\ContactController::class, 'index']);
Route::get('/product', [App\Http\Controllers\Front\ProductController::class, 'index']);
Route::post('/admin-login', [App\Http\Controllers\Back\LoginController::class, 'login'])->name('admin-login');
Route::get('/home', [App\Http\Controllers\Back\HomeController::class, 'index'])->name('home');

//User
Route::get('/user',[App\Http\Controllers\Back\UserController::class, 'index'])->name('user.index');
Route::get('/user/create',[App\Http\Controllers\Back\UserController::class, 'create'])->name('user.create');
Route::get('/user/edit/{id}',[App\Http\Controllers\Back\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/store',[App\Http\Controllers\Back\UserController::class, 'store'])->name('user.store');
Route::post('/user/update/{id}',[App\Http\Controllers\Back\UserController::class, 'update'])->name('user.update');
Route::get('/user/show/{id}',[App\Http\Controllers\Back\UserController::class, 'show'])->name('user.show');
Route::post('/user/destroy/{id}',[App\Http\Controllers\Back\UserController::class, 'destroy'])->name('user.destroy');

//Notice
Route::get('/notice',[App\Http\Controllers\Back\NoticeController::class, 'index'])->name('notice.index');
Route::get('/notice/create',[App\Http\Controllers\Back\NoticeController::class, 'create'])->name('notice.create');
Route::get('/notice/edit/{id}',[App\Http\Controllers\Back\NoticeController::class, 'edit'])->name('notice.edit');
Route::post('/notice/store',[App\Http\Controllers\Back\NoticeController::class, 'store'])->name('notice.store');
Route::post('/notice/update/{id}',[App\Http\Controllers\Back\NoticeController::class, 'update'])->name('notice.update');
Route::get('/notice/show/{id}',[App\Http\Controllers\Back\NoticeController::class, 'show'])->name('notice.show');
Route::post('/notice/destroy/{id}',[App\Http\Controllers\Back\NoticeController::class, 'destroy'])->name('notice.destroy');

//ckeditor
Route::post('/ckeditor/upload',[App\Http\Controllers\Back\CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

//Create
Route::get('/company',[App\Http\Controllers\Back\CompanydetailsController::class, 'index'])->name('company.index');
Route::post('/company/store/{id}',[App\Http\Controllers\Back\CompanydetailsController::class, 'store'])->name('company.store');

//Product
Route::get('/product',[App\Http\Controllers\Back\ProductController::class, 'index'])->name('product.index');
Route::get('/product/create',[App\Http\Controllers\Back\ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{id}',[App\Http\Controllers\Back\ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/store',[App\Http\Controllers\Back\ProductController::class, 'store'])->name('product.store');
Route::post('/product/update/{id}',[App\Http\Controllers\Back\ProductController::class, 'update'])->name('product.update');
Route::get('/product/show/{id}',[App\Http\Controllers\Back\ProductController::class, 'show'])->name('product.show');
Route::post('/product/destroy/{id}',[App\Http\Controllers\Back\ProductController::class, 'destroy'])->name('product.destroy');

//Category
Route::get('/category',[App\Http\Controllers\Back\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create',[App\Http\Controllers\Back\CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}',[App\Http\Controllers\Back\CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/store',[App\Http\Controllers\Back\CategoryController::class, 'store'])->name('category.store');
Route::post('/category/update/{id}',[App\Http\Controllers\Back\CategoryController::class, 'update'])->name('category.update');
Route::get('/category/show/{id}',[App\Http\Controllers\Back\CategoryController::class, 'show'])->name('category.show');
Route::post('/category/destroy/{id}',[App\Http\Controllers\Back\CategoryController::class, 'destroy'])->name('category.destroy');


//expense
Route::get('/expense',[App\Http\Controllers\Back\ExpenseController::class, 'index'])->name('expense.index');
Route::get('/expense/create',[App\Http\Controllers\Back\ExpenseController::class, 'create'])->name('expense.create');
Route::get('/expense/edit/{id}',[App\Http\Controllers\Back\ExpenseController::class, 'edit'])->name('expense.edit');
Route::post('/expense/store',[App\Http\Controllers\Back\ExpenseController::class, 'store'])->name('expense.store');
Route::post('/expense/update/{id}',[App\Http\Controllers\Back\ExpenseController::class, 'update'])->name('expense.update');
Route::get('/expense/show/{id}',[App\Http\Controllers\Back\ExpenseController::class, 'show'])->name('expense.show');
Route::post('/expense/destroy/{id}',[App\Http\Controllers\Back\ExpenseController::class, 'destroy'])->name('expense.destroy');
