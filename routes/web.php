<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');


// Backend Section
Route::get('/dashboard', [DashboardController::class , 'dashboard'])->name('admin.dashboard');

// Blog Section

Route::get('/add/blog', [BlogController::class , 'addBlog'])->name('add.blog');
Route::post('/add/blog', [BlogController::class , 'storeBlog'])->name('store.blog');
Route::get('/posts', [BlogController::class , 'showBlogs'])->name('show.blog');
// routes/web.php or routes/web.php
Route::get('/post/{id}/edit', [BlogController::class , 'editBlog'])->name('edit.blog');
Route::post('/post/{id}/edit', [BlogController::class , 'updateBlog'])->name('update.blog');
Route::delete('/{id}/delete/', [BlogController::class , 'deleteBlog'])->name('delete.blog');
