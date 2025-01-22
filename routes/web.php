<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\frontend\PageController;
use Illuminate\Support\Facades\Route;

//for frontend
Route::get('/',[PageController::class,'home'])->name('home');
Route::get('cat/{slug}',[PageController::class,'category'])->name('cate');
Route::get('article/{id}',[PageController::class,'article'])->name('articles');

Route::get('dashboard',[DashboardController::class,'dashboard'])->name('admin-dashboard');
Route::resource('admin/company',CompanyController::class);
Route::resource('admin/category',CategoryController::class);
Route::resource('admin/articles',ArticleController::class)->names('articles');

Route::get('contact',[EmailController::class,'SendEmail']);