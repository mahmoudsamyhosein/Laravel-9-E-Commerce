<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckOutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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
Route::get('/cart',CartComponent::class)->name('product.cart');
//مسار أتمام الدفع
Route::get('/checkout',CheckOutComponent::class);
//مسار تفاصيل المنتج
Route::get('/product/{slug}',DetailsComponent::class)->name('products.details');
//مسار للعميل للدخول الي لوحة التحكم
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});
//مسار للمدير للدخول الي لوحة التحكم
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});

