<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 原始碼
Route::get('/', function () {
    return view('index');
    // echo "Hello route";
});

Route::get('f1', function () {
    return view('f1');
    // echo "Hello route";
});

Route::get('f2', function () {
    return view('f2');
    // echo "Hello route";
});

Route::get('f3', function () {
    return view('f3');
    // echo "Hello route";
});


// 建立$data
Route::get('/', function () {
    $data=[
        's1' => 'hi',
        's2' => 'hello',
        's3' => 'world'
    ];
    return view('index',['data' => $data]);
});

// 加入參數
Route::get('/user/{id}', function (string $id) {
    return view('index',['data' => $id]);
});




// Route::get('/hello', function () {
//     return view('hello');
// });