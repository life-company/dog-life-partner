<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MailSendController;

Route::get('/', [DogController::class, 'index']);// トップページ
Route::get('/terms-of-service', [DogController::class, 'term']);// 利用規約
Route::get('/mypage', [AccountController::class, 'mypage']);// マイページ
Route::prefix('/contact')->group(function () {
  Route::get('/', [MailSendController::class, 'index']);// お問い合わせフォーム
  Route::post('/confirm', [MailSendController::class, 'confirm']);// お問い合わせフォーム確認
  Route::put('/send', [MailSendController::class, 'send']);// お問い合わせフォーム送信
});
