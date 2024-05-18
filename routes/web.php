<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PublicController::class, 'hompage'])->name('homepage');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
