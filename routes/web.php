<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    InvestimentController
};

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

Route::get('/',  [InvestimentController::class,'index'])->name('investiments.index');
Route::get('/investiment/{id}',  [InvestimentController::class,'show'])->name('investiment.show');