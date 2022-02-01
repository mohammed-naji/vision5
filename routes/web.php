<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;

// Route::get('/', function() {
//     return 'Homepage';
// });

// Route::get('news', function() {
//     return 'News page';
// });

// Route::get('news/{id}', function($aaaaaaa) {
//     return "Single news number : $aaaaaaa";
// })->whereNumber('id');

// Route::get('user/{name}', function($name) {
//     return 'Welcome ' . $name;
// })->whereAlpha('name');

// // Route::get('profile', function() {
// //     return 'welcome in profile ';
// // });

// Route::get('profile/{user?}', function($user = null) {
//     return 'welcome in profile ' . $user;
// });








// // Route::get('/admin/posts', function() { return 'admin'; });
// // Route::get('/admin/news', function() { return 'admin'; });
// // Route::get('/admin/articles', function() { return 'admin'; });
// // Route::get('/admin/users', function() { return 'admin'; });
// // Route::get('/admin/services', function() { return 'admin'; });



// Route::get('contact-me', function() {
//     return 'Contact';
// })->name('contactpage');

// // ::
// // .
// // ->
// // =>

// Route::get('/echo', function() {
//     echo 'rrrrr<br>';
//     echo 'rrrrr<br>';
//     echo 'rrrrr<br>';
//     echo 'rrrrr<br>';
//     echo 'rrrrr<br>';
//     echo 'rrrrr<br>';
//     echo 'rrrrr<br>';
//     echo 'rrrrr<br>';
//     echo 'rrrrr<br>';
//     return 'Done';
// });



// Route::get('test', [TestController::class, 'index']);

// // Route::get('test', 'TestController@index'); > 9



Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('portal', [StudentController::class, 'index']);
Route::get('portal/{st}', [StudentController::class, 'student']);
