<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeskController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Frontend\PartnerRegistrationController;
use App\Http\Controllers\Admin\FeaturesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\AllProductsController;
use App\Http\Controllers\Admin\ProductFeactController;
use App\Http\Controllers\Frontend\ProductsDetailsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/all-products', [HomeController::class, 'allproduct'])->name('all.products');
Route::get('/services', [HomeController::class, 'service'])->name('service');
Route::get('/ecommarce/with/app', [HomeController::class, 'ecommerce'])->name('ecommerce.app');
Route::get('/multi/vandor/ecommerce', [HomeController::class, 'multivandor'])->name('multivandor');
Route::get('/news/portal', [HomeController::class, 'newspotral'])->name('news.potral');
Route::get('/blog/site', [HomeController::class, 'blogsite'])->name('blogsite');
Route::get('/erp', [HomeController::class, 'erp'])->name('erp');
Route::get('/pay-roll', [HomeController::class, 'payroll'])->name('payroll');
Route::get('/inventory', [HomeController::class, 'inventory'])->name('inventory');
Route::get('/hrm', [HomeController::class, 'hrm'])->name('hrm');
Route::get('/hosting', [HomeController::class, 'hosting'])->name('hosting');
Route::get('/hotel/management', [HomeController::class, 'hotel'])->name('hotel');
Route::get('/web/design', [HomeController::class, 'webdesign'])->name('webdesign');
Route::get('/mobile/application', [HomeController::class, 'mobile'])->name('mobile.application');
Route::get('/desktop', [HomeController::class, 'desktop'])->name('desktop');
Route::get('/customer/software', [HomeController::class, 'customer'])->name('customer.software');
Route::get('/accountant', [HomeController::class, 'accounted'])->name('accounted');
Route::get('/digital-merkiting', [HomeController::class, 'digitalmerkiting'])->name('digital.merkiting');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/detail', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/partners', [HomeController::class, 'partner'])->name('partner');
Route::resource('partner/reg', PartnerRegistrationController::class);


// routes/web.php

Route::get('/product/{id}', [ProductsDetailsController::class, 'show'])->name('product.show');



Route::middleware(['auth', 'verified'])->group(function () {
    // Routes that require email verification
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/site-setting',[SiteSettingController::class,'SiteSetting'])->name('site.setting');
    Route::resource('partner/register', PartnerController::class);
    Route::resource('users', UserController::class);
    Route::resource('features',  FeaturesController::class);
    // Role
    Route::resource('products', ProductController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('task', TeskController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('product', ProductController::class);
    Route::resource('seo', SeoController::class);
    Route::resource('itemfeaturs', ProductFeactController::class);
   

    Route::get('all/products/create',[AllProductsController::class,'index'])->name('all.create');
    Route::get('all/products/manage',[AllProductsController::class,'manage'])->name('all.manage');
    Route::post('all/products/store',[AllProductsController::class,'store'])->name('all.store');
    Route::get('all/products/edit/{id}',[AllProductsController::class,'edit'])->name('all.edit');
    Route::post('all/products/update/{id}', [AllProductsController::class, 'update'])->name('all.update');
    Route::delete('all/products/delete/{id}', [AllProductsController::class, 'destroy'])->name('all.destroy');


    // Cache Clear
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        
        return redirect('/dashboard');
    })->name('cache.clear');
});

// Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('dashboard');
//search
Route::get('/search', [SearchController::class, 'search'])->name('search');


// Site settings



