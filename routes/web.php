<?php

use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'hompage'])->name('homepage');
