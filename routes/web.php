<?php

use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderInfoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Models\ContactInfo;
use App\Models\processCheckout;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    $products = product::all();

    return view('pages.welcome', compact('products')) ;
});


Route::get('/header',[ProfileController::class,'header'])->name('layout.header');
Route::get('/footer',[ProfileController::class,'footer'])->name('layout.footer');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');



require __DIR__.'/auth.php';
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');         
Route::get('/welcome',[PagesController::class, 'home'])->name('pages.welcome');
Route::get('/about',[PagesController::class, 'about'])->name('pages.about');
Route::get('/product',[PagesController::class, 'product'])->name('pages.product');
Route::get('/testimonial',[PagesController::class, 'testimonial'])->name('pages.testimonial');
Route::get('/cart',[CartController::class, 'cart'])->name('pages.cart');
Route::get('/checkout',[PagesController::class, 'checkout'])->name('pages.checkout');
Route::post('/pages.contact',[ContactInfoController::class,'contactinfo'])->name('submiteForm');



    Route::get('/cart', [CartController::class, 'cart'])->name('pages.cart');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [OrderInfoController::class, 'showCheckout'])->name('pages.checkout');

    Route::post('/checkout', [OrderInfoController::class, 'processCheckout'])->name('checkout.process');
});

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Handle login submission
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Protected admin page
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users.index');
// Edit user form
Route::get('/admin/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');

// Update user
Route::put('/admin/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');

// Delete user
Route::delete('/admin/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
Route::delete('/admin/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');

Route::get('/admin_product',[AdminController::class, 'listProducts'])->name('products.admin_product');
// Show the edit form
Route::get('/admin/products/{id}/edit', [AdminController::class, 'editProduct'])->name('products.edit');

// Handle the update
Route::put('/admin/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.update');


Route::get('/order', [OrderItemController::class, 'showForm'])->name('pages.orders');
Route::post('/order', [OrderItemController::class, 'submit'])->name('order.submit');


Route::get('/admin/orders', [AdminController::class, 'index'])->name('admin.orders');
// Show a single order


// Delete an order
Route::delete('/admin/orders/{order}', [AdminController::class, 'destroy'])->name('admin.orders.destroy');
// Show the edit form
Route::get('/admin/orders/{order}/edit', [AdminController::class, 'edit'])->name('admin.edit');

// Handle the update
Route::put('/admin/orders/{order}', [AdminController::class, 'update'])->name('admin.orders.update');




