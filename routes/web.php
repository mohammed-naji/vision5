<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Homepage';
});

Route::get('news', function() {
    return 'News page';
});

Route::get('news/{id}', function($aaaaaaa) {
    return "Single news number : $aaaaaaa";
});

Route::get('user/{name}', function($name) {
    return 'Welcome ' . $name;
});
