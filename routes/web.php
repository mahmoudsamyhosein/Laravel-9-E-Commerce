<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckOutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
//مسار الرئيسية
Route::get('/',HomeComponent::class);
// مسار المتجر
Route::get('/shop',ShopComponent::class);
// مسار العربة 
Route::get('/cart',CartComponent::class);
//مسار أتمام الدفع
Route::get('/checkout',CheckOutComponent::class);
//مسار للعميل
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

});
//مسار للمدير
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

});

