<?php

use Illuminate\Support\Facades\Route;

Route::prefix('adminpanel')->group(function() {
    Route::get('/posts', function() { return 'admin'; });
    Route::get('/news', function() { return 'admin'; });
    Route::get('/articles', function() { return 'admin'; });
    Route::get('/users', function() { return 'admin'; });
    Route::get('/services', function() { return 'admin'; });
});
