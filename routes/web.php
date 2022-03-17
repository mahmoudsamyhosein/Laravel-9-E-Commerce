<?php
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddPageComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditPageComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminPagesComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\Admin\AdminSettingComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckOutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ThankYouPageComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\WishListComponent;
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
//مسار الرئيسية
Route::get('/',HomeComponent::class);
// مسار المتجر
Route::get('/shop',ShopComponent::class);
// مسار العربة 
Route::get('/cart',CartComponent::class)->name('product.cart');
//مسار الأقسام 
Route::get('/product/category/{category_slug}', CategoryComponent::class)->name('product.category');
//مسار أتمام الدفع
Route::get('/checkout',CheckOutComponent::class)->name('product.checkout');
//مسار تفاصيل المنتج
Route::get('/product/{slug}',DetailsComponent::class)->name('products.details');
// البحث 
Route::get('/search',SearchComponent::class)->name('product.search');
//تواصل معنا
Route::get('/contact-us',ContactComponent::class)->name('contact-us');
//قائمة الأمنيات
route::get('/wishlist',WishListComponent::class)->name('product.wishlist');
//صفحةالشكر بعد الطلب
route::get('/thank-you',ThankYouPageComponent::class)->name('thank-you');
//مسار للعميل للدخول الي لوحة التحكم
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});
//مسار للمدير للدخول الي لوحة التحكم
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    //لوحة التحكم 
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    //الأقسام
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    //المنتجات
    Route::get('/admin/products',AdminProductComponent::class )->name('admin.products');
    Route::get('/admin/products/add',AdminAddProductComponent::class )->name('admin.addproduct');
    Route::get('/admin/products/edit/{product_slug}',AdminEditProductComponent::class )->name('admin.editproduct');
    //السلايدر
    Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add',AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');
    //رئيسية المنتجات بالأقسام
    Route::get('/admin/home-categories',AdminHomeCategoryComponent::class)->name('admin.home-categories');
    //الخصومات
    Route::get('/admin/sale',AdminSaleComponent::class)->name('admin.sale');
    //تواصل معنا 
    Route::get('/admin/contact-us',AdminContactComponent::class)->name('admin.contact-us');
    //الأعدادات
    Route::get('/admin/settings',AdminSettingComponent::class)->name('admin.settings');
    //الكوبونات
    Route::get('admin/coupons',AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('admin/coupon/add',AdminAddCouponComponent::class)->name('admin.addcoupons');
    Route::get('admin/coupon/edit/{coupon_id}',AdminEditCouponComponent::class)->name('admin.editcoupons');
    //الصفحات
    Route::get('admin/pages',AdminPagesComponent::class)->name('admin.pages');
    Route::get('admin/pages/add',AdminAddPageComponent::class)->name('admin.addpages');
    Route::get('admin/pages/edit/{page_id}',AdminEditPageComponent::class)->name('admin.editpages');

});
//مبدل اللغات
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);