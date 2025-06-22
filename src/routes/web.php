<?php

use App\Http\Controllers\EntityController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FormProcessor;
use App\Http\Controllers\LibraryUserController;
use App\Http\Controllers\MyUserController;
use App\Http\Controllers\SendFileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestRedirectController;
use App\Http\Controllers\UserController;
use App\Models\Worker;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'test']);

Route::get('/user', [UserController::class, 'index']);

Route::post('/user', [UserController::class, 'store'])->name('store-user');



Route::get('/books', [EntityController::class, 'index'])->name('books');

Route::post('/books', [EntityController::class, 'store'])->name('save_book');

Route::get('/remove_book/{id}', [EntityController::class, 'delete'])->where(['id' => '[0-9]+'])->name('remove_book');


Route::get('/upload', [FileUploadController::class, 'index']);
Route::post('/upload', [FileUploadController::class, 'upload'])->name('upload_file');

Route::get('/library_user/{id}', [LibraryUserController::class, 'show'])->where(['id' => '[0-1]+']);


Route::get('/my_user', [MyUserController::class, 'showUser']);

Route::get('/redirect_test', TestRedirectController::class);

Route::get('/send_file', SendFileController::class );
//Homework2
Route::get('/userform', [FormProcessor::class, 'index']);
Route::post('/store_form', [FormProcessor::class, 'store']);

Route::get('/test_database', function () {
        for ($i = 0; $i < 5; $i++) {
            $worker = new Worker();
            $worker->first_name = 'John' . $i;
            $worker->save();
        }
});

Route::get('/main', function(){
    return view('mainpage');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/users_list', function(){
    $users = ['Ivan', 'Petr', 'Nikolay', 'Fedor', 'Oleg'];
    return view('users', ['userlist'=> $users]);
});

Route::get('/uppercase', function(){
    return view('testdir');
});
