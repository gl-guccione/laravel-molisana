<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/products', function () {

    $database = config('data_from_database');

    $pasta_type = [];

    foreach ($database as $key => $pasta) {
      $pasta["id"] = $key;
      $pasta_type[$pasta["tipo"]][] = $pasta;
    }

    return view('products', ["paste" => $pasta_type]);

})->name('products');

Route::get('/products/show/{id}', function ($id) {

    if (config('data_from_database.'.$id) == null) {
      return redirect()->route('products');
    }

    $next_product = false;
    $prev_product = false;

    $idRef = $id;
    if (config('data_from_database.'.++$idRef) != null) {
      $next_product = $id;
      ++$next_product;
    }

    $idRef = $id;

    if (config('data_from_database.'.--$idRef) != null) {
      $prev_product = $id;
      --$prev_product;
    }

    $product_from_id = config('data_from_database.'.$id);

    // dd(config("data_from_database.$id"));

    $data = [
      "product" => $product_from_id,
      "prev" => $prev_product,
      "next" => $next_product,
    ];

    return view('product_info', $data);

})->name('product_info');

Route::get('/news', function () {
    return view('news');
})->name('news');
