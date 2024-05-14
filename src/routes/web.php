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

Route::get('/', function () {
    // DB::table('users')->insert([
    //     'name' => 'Mr milon',
    //     'email' => 'milon02@gmail.com', // Corrected the typo, added comma after 'email'
    //     'password' => '1234567'
    // ]);
    return view('welcome');
});
