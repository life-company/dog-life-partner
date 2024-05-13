<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MailSendController;


Route::get('/', [DogController::class, 'index']);// トップページ
Route::get('/terms-of-service', [DogController::class, 'term']);// 利用規約
Route::get('/mypage', [AccountController::class, 'mypage']);// マイページ
Route::get('/contact', [MailSendController::class, 'index']);
