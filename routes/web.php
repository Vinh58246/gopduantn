<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ActiveUserController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/// Admin Dashboard

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');
});

Route::middleware(['auth', 'role:admin'])->group(function () {


    // Brand All Route 
    Route::controller(BrandController::class)->group(function () {
        Route::get('/all/brand', 'AllBrand')->name('all.brand');
        Route::get('/add/brand', 'AddBrand')->name('add.brand');
    });


    // Category All Route 
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
    });



    // Vendor Active and Inactive All Route 
    Route::controller(AdminController::class)->group(function () {
        Route::get('/inactive/vendor', 'InactiveVendor')->name('inactive.vendor');
        Route::get('/active/vendor', 'ActiveVendor')->name('active.vendor');
        Route::get('/inactive/vendor/details', 'InactiveVendorDetails')->name('inactive.vendor.details');
        Route::get('/active/vendor/details', 'ActiveVendorDetails')->name('active.vendor.details');
    });


    // Product All Route 
    Route::controller(ProductController::class)->group(function () {
        Route::get('/all/product', 'AllProduct')->name('all.product');
        Route::get('/add/product', 'AddProduct')->name('add.product');
    });


    // Slider All Route 
    Route::controller(SliderController::class)->group(function () {
        Route::get('/all/slider', 'AllSlider')->name('all.slider');
        Route::get('/add/slider', 'AddSlider')->name('add.slider');
    });

    // Banner All Route 
    Route::controller(BannerController::class)->group(function () {
        Route::get('/all/banner', 'AllBanner')->name('all.banner');
        Route::get('/add/banner', 'AddBanner')->name('add.banner');
    });


    // Coupon All Route 
    Route::controller(CouponController::class)->group(function () {
        Route::get('/all/coupon', 'AllCoupon')->name('all.coupon');
        Route::match(['get', 'post'], '/add/coupon', 'AddCoupon')->name('add.coupon');
        Route::get('/edit/coupon/{id}', 'EditCoupon')->name('edit.coupon');
        Route::put('/update/coupon/{id}', 'UpdateCoupon')->name('update.coupon');

        Route::delete('/delete/coupon/{id}', [CouponController::class, 'DeleteCoupon'])->name('delete.coupon');

    });
    
    

    // Admin Order All Route 
    Route::controller(OrderController::class)->group(function () {
        Route::get('/pending/order', 'PendingOrder')->name('pending.order');
        Route::get('/admin/order/details', 'AdminOrderDetails')->name('admin.order.details');
        Route::get('/admin/confirmed/order', 'AdminConfirmedOrder')->name('admin.confirmed.order');
        Route::get('/admin/processing/order', 'AdminProcessingOrder')->name('admin.processing.order');
        Route::get('/admin/delivered/order', 'AdminDeliveredOrder')->name('admin.delivered.order');
    });


   // Return Order All Route 
   Route::controller(ReturnController::class)->group(function () {
    Route::get('/return/orders', 'index')->name('return.request');
    Route::get('/return/orders/create', 'create')->name('return.create');
    Route::post('/return/orders', 'store')->name('return.store');
    Route::get('/return/orders/{returnOrder}', 'show')->name('return.show');
    Route::get('/return/orders/{returnOrder}/edit', 'edit')->name('return.edit');
    Route::put('/return/orders/{returnOrder}', 'update')->name('return.update');
    Route::delete('/return/orders/{returnOrder}', 'destroy')->name('return.destroy');
    Route::get('/complete/return/request', 'CompleteReturnRequest')->name('complete.return.request');
    Route::post('/return/orders/{returnOrder}/process', 'processReturn')->name('return.process');
});



    // Report All Route 
    Route::controller(ReportController::class)->group(function () {
        Route::get('/report/view', 'ReportView')->name('report.view');
        Route::get('/order/by/user', 'OrderByUser')->name('order.by.user');
    });


    // Active user and vendor All Route 
    Route::controller(ActiveUserController::class)->group(function () {

        Route::get('/all/user', 'AllUser')->name('all-user');
        Route::get('/all/vendor', 'AllVendor')->name('all-vendor');
    });


    // Blog Category All Route 
    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blog/category', 'AllBlogCateogry')->name('admin.blog.category');
        Route::get('/admin/add/blog/category', 'AddBlogCateogry')->name('add.blog.categroy');
    });



    // Blog Post All Route 
    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blog/post', 'AllBlogPost')->name('admin.blog.post');
        Route::get('/admin/add/blog/post', 'AddBlogPost')->name('add.blog.post');
    });


    // Admin Reviw All Route 
    Route::controller(ReviewController::class)->group(function () {
        Route::get('/pending/review', 'PendingReview')->name('pending.review');
        Route::get('/publish/review', 'PublishReview')->name('publish.review');
    });


    // Site Setting All Route 
    Route::controller(SiteSettingController::class)->group(function () {
        Route::get('/site/setting', [SiteSettingController::class, 'editSiteSetting'])->name('site.setting');

        Route::get('/seo/setting', 'SeoSetting')->name('seo.setting'); // Hiển thị trang SEO
        Route::post('/site/setting/update/{id}', [SiteSettingController::class, 'UpdateSiteSetting'])->name('site.setting.update');



    });
    

    // Permission All Route 
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
    });


    // Roles All Route 
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/add/roles', 'AddRoles')->name('add.roles');

        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
    });

    // Admin User All Route 
    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
    }); 
    
}); // Admin End Middleware 

require __DIR__ . '/auth.php';
