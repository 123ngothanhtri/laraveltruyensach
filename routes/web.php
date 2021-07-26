<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/the-loai', [App\Http\Controllers\TheLoaiController::class, 'index']);
Route::post('/the-loai-them', [App\Http\Controllers\TheLoaiController::class, 'store']);
Route::post('/the-loai-sua', [App\Http\Controllers\TheLoaiController::class, 'update']);
Route::get('/the-loai-xoa/{id}', [App\Http\Controllers\TheLoaiController::class, 'destroy']);

Route::get('/truyen', [App\Http\Controllers\TruyenController::class, 'index']);
Route::get('/truyen-them', [App\Http\Controllers\TruyenController::class, 'create']);
Route::post('/truyen-them', [App\Http\Controllers\TruyenController::class, 'store']);
Route::get('/truyen-sua/{id}', [App\Http\Controllers\TruyenController::class, 'edit']);
Route::post('/truyen-sua', [App\Http\Controllers\TruyenController::class, 'update']);
Route::get('/truyen-xoa/{id}', [App\Http\Controllers\TruyenController::class, 'destroy']);

Route::get('/chuong', [App\Http\Controllers\ChuongController::class, 'index']);
Route::get('/chuong-them', [App\Http\Controllers\ChuongController::class, 'create']);
Route::post('/chuong-them', [App\Http\Controllers\ChuongController::class, 'store']);
Route::get('/chuong-sua/{id}', [App\Http\Controllers\ChuongController::class, 'edit']);
Route::post('/chuong-sua', [App\Http\Controllers\ChuongController::class, 'update']);
Route::get('/chuong-xoa/{id}', [App\Http\Controllers\ChuongController::class, 'destroy']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'trangchu']);
Route::get('/chi-tiet-truyen/{id}', [App\Http\Controllers\HomeController::class, 'chitiettruyen']);
Route::get('/doc-truyen/{idt}', [App\Http\Controllers\HomeController::class, 'doctruyen']);
