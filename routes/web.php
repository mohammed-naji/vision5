<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Models\News;
use Illuminate\Support\Facades\DB;

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



// Route::get('/', [SiteController::class, 'index']);
// Route::get('/about', [SiteController::class, 'about']);
// Route::get('/contact', [SiteController::class, 'contact']);
// Route::get('portal', [StudentController::class, 'index']);
// Route::get('portal/{st}', [StudentController::class, 'student']);

Route::prefix('site1')->group(function() {

    Route::get('/', [Site1Controller::class, 'index'])->name('site1home');

    Route::get('/about', [Site1Controller::class, 'about'])->name('site1about');

    Route::get('/services', [Site1Controller::class, 'services'])->name('site1services');

    Route::get('/contact', [Site1Controller::class, 'contact'])->name('site1contact');

});




Route::prefix('site2')->group(function() {

    Route::get('/', [Site2Controller::class, 'index'])->name('site2home');

    Route::get('/about', [Site2Controller::class, 'about'])->name('site2about');

    Route::get('/contact', [Site2Controller::class, 'contact'])->name('site2contact');

    Route::get('/post/{title}', [Site2Controller::class, 'post'])->name('site2post');

});

Route::get('site3', [Site3Controller::class, 'index'])->name('site3index');


// Forms
Route::get('form1', [FormController::class, 'form1']);
Route::post('form1', [FormController::class, 'form1Submit'])->name('form1');


Route::get('form2', [FormController::class, 'form2']);
Route::post('form2', [FormController::class, 'form2Submit'])->name('form2');

Route::get('form3', [FormController::class, 'form3']);
Route::post('form3', [FormController::class, 'form3Submit'])->name('form3');

Route::get('form4', [FormController::class, 'form4']);
Route::post('form4', [FormController::class, 'form4Submit'])->name('form4');


Route::get('form5', [FormController::class, 'form5']);
Route::post('form5', [FormController::class, 'form5Submit'])->name('form5');


Route::view('/', 'welcome');


Route::get('insert', function() {

    // Query Statment

    // DB::statement('insert into comments (comment) values ("new comment")');
    // DB::insert('insert into comments (comment) values (?)', ['new new']);

    // Query Builder
    // DB::table('news')->insert([
    //     'title' => 'another post',
    //     'body' => 'lorem lorem',
    //     'image' => 'aa.png',
    //     'views' => '5',
    //     'rate' => '3.5',
    //     'created_at' => now(),
    //     'updated_at' => now(),
    // ]);


    //DB::table('news')->insert([

    // Eleqouent
    News::create([
        'title' => 'another post 2',
        'body' => 'lorem lorem 2',
        'image' => 'aa2.png',
        'views' => '88',
        'rate' => '4.5'
    ]);

});
