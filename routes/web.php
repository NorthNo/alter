<?php

use App\Http\Controllers\AdminController;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\GuideSectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServislerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PricingController;

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\MobileController;

use App\Models\User;
use App\Models\SSS;
use App\Models\Transactions;

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\MobileMiddleware;
use App\Http\Middleware\BuyMiddleware;



Route::get('auth/google', [UserController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [UserController::class, 'handleGoogleCallback']);



Route::get('/', function () {
    $products = DB::table('product')->get();

    return view('main/index', [
        "page_name" => "Home",
        "products" => $products,
        "data" => SSS::all()
    ]);
});

Route::get('/servisler', [ServislerController::class, 'index']);
Route::get('/kurulum', [GuideSectionController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'contact_form'])->name('contact.submit')->middleware('throttle:1,1');

Route::get('/verify', function () {
    return view('main/verify')->with("page_name", "Doğrula");
});
Route::get('/verify-email', [UserController::class, 'send_verify_code']);
Route::post('/verify_account', [UserController::class, 'verify_account']);


Route::middleware([MobileMiddleware::class])->group(function () {
    Route::get('/mobile/enter', [MobileController::class, 'showPhoneNumberForm'])->name('mobile.enter');
    Route::post('/mobile/send', [MobileController::class, 'sendVerificationCode'])->name('mobile.send');
    Route::get('/mobile/verify', [MobileController::class, 'showVerificationForm'])->name('mobile.verify');
    Route::post('/mobile/verify', [MobileController::class, 'verifyCode'])->name('mobile.verify.submit');
});

Route::get('/user', function () {
    if (Auth::check()) {
        return redirect('/');
    }
    return view('main/user')->with("page_name", "Kayıt Ol");
});


Route::post('/login', [UserController::class, 'login'])->middleware('throttle:3,1');


Route::get('password_reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password_email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password_reset_{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password_reset', [ResetPasswordController::class, 'reset'])->name('password.update');



//USER PANEL
Route::middleware([UserMiddleware::class])->group(function () {
    Route::get('/account', [UserController::class, 'account_page']);
    Route::get('/wallet', function () {
        return view('main/wallet')->with([
            "page_name" => "Cüzdan",
            "data" => User::where('id', Auth::user()->id)->first(),
            "transactions" => Transactions::where('email', Auth::user()->email)->get()
        ]);
    });
    Route::get('/settings', function () {
        $user = User::where('id', Auth::id())->first();

        return view('main/settings', ['page_name' => 'Ayarlar', 'user' => $user]);
    });
});
Route::get('/buy', [ProductController::class, 'show']);
Route::post('/signup-contact', [UserController::class, 'contact_signup'])->name('signup-contact');
Route::post('/register_user', [UserController::class, 'register'])->middleware('throttle:3,1');;
Route::get('/logout', [UserController::class, 'logout']);


Route::middleware([BuyMiddleware::class])->group(function () {
    Route::get('/payment', [PricingController::class, 'index']);
});
Route::post('/checkout', [PricingController::class, 'checkout']);


//ADMIN PANEL
Route::get('/admin_login', function () {
    return view('admin/admin_login');
});
Route::post('/admin_login', [AdminController::class, 'admin_login'])->middleware('throttle:3,1');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);

    Route::get('/product_list', [AdminController::class, 'products_list']);
    Route::get('/users_list', [AdminController::class, 'users_list']);
    Route::get('/buy_history', [AdminController::class, 'buy_history']);

    Route::get('/contacts', [AdminController::class, 'contact_list']);
    //Route::get('/contact_message', [ContactController::class, 'contact_message'])->name('contact_message');
    //Route::post('/send_reply', [ContactController::class, 'send_reply'])->name('send_reply');


    Route::get('/sections/{page}', [SectionController::class, 'index']);
    Route::post('/section/add/{page}', [SectionController::class, 'add'])->name('section.update');

    Route::get('/user_control', [AdminController::class, 'user_control']);

    Route::get('/products', [ProductController::class, 'product_show']);
    Route::get('/delete_product', [ProductController::class, 'delete']);
    Route::get('/product_control', [ProductController::class, 'product_control']);
    Route::get('/product_control/new_product', [ProductController::class, 'new_product']);
    Route::post('/product_control/new_product/add', [ProductController::class, 'add_product']);
    Route::post('/update_product', [ProductController::class, 'update_product']);
    Route::post('/product_update', [ProductController::class, 'product_update']);

    Route::get('/general_settings', function () {
        return view('admin/general_settings')->with("page_name", "Ayarlar");
    });
});
