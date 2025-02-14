<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\ChangePassword;
use App\Livewire\CreateNews;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get("/news/{news}", fn(News $news) => view("news-detail", compact('news')))->name("news.detail");

Route::middleware("auth:web")->name('dashboard.')->prefix("/dashboard")->group(function () {
    Route::get("/", [DashboardController::class, 'index'])->name("profile");
    Route::get("/change-password", ChangePassword::class)->name("password");
    Route::get("/news", CreateNews::class)->name("news");
    Route::get("/logout", [DashboardController::class, 'logout'])->name("logout");
});
