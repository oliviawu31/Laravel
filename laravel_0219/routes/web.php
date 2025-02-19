<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

// 一頁式網站的首頁
Route::get('/', function () {
    return view('index');
});

// 隱藏密碼
Route::get('test_css', function () {
    // return view('test_css');
    $data = env('MY_PWD');
    dd($data);
});

// food>index
Route::get('/foods', function () {
    return view('food.index');
})->name('foods.index');

//food>F1
Route::get('/foods/f1', function () {
    return view('food.f1');
})->name('foods.f1');

//轉址
Route::get('/foodie', function () {
    return redirect()->route('foods.index');
});

// car>index
// Route::get('/cars', function () {
//     return view('car.index');
// })->name('cars.index');

// car>create
// Route::get('/cars/create', function () {
//     return view('car.create');
// })->name('cars.create');

// car>updete
// Route::get('/cars/update', function () {
//     return view('car.update');
// })->name('cars.update');

// car>del
// Route::get('/cars/del', function () {
//     return view('car.del');
// })->name('cars.del');

Route::resource('cars', CarController::class);
