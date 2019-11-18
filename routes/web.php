<?php


/* --------------------- Common/User Routes START -------------------------------- */

Route::get('/', 'SiteController@index')->name('index');
Route::get('/about-us', 'SiteController@about')->name('about');
Route::get('/contact-us', 'SiteController@contact')->name('contact');

Route::get('blog', 'BlogController@index')->name('blog');

Auth::routes([ 'verify' => true ]);

Route::middleware(['verified'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'ProfileController@index')->name('profile');
});



// Events pages routes
Route::prefix('/events')->name('event.')->group(function () {

    Route::get('/weddings', 'EventController@weddings')->name('weddings');
    Route::get('/seminars', 'EventController@seminars')->name('seminars');
    Route::get('/concerts', 'EventController@concerts')->name('concerts');
    Route::get('/all', 'EventController@all')->name('all');

});


Route::prefix('/services')->name('services.')->group(function () {
    Route::get('/all', 'ServiceController@index')->name('all');
});



/* --------------------- Common/User Routes END -------------------------------- */

/* ----------------------- Admin Routes START -------------------------------- */

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    
    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        
        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Register Routes
        // Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        // Route::post('/register','RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

    Route::get('/dashboard','HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');

    Route::prefix('/event')->name('event.')->namespace('Event')->group(function(){
        // event routes
        Route::get('/categories', 'EventController@category')->name('categories');
         Route::get('/all', 'EventController@index')->name('all');

        // category routes
        // Route::get('/')
    });

    Route::get('/service/all', 'EventController@services')->name('service.all');

    //Put all of your admin routes here...


    // user routes
    Route::prefix('user')->group(function ()
    {
       Route::get('list', 'UserController@index')->name('user.list');
       Route::post('add', 'UserController@create')->name('user.add');
       Route::get('edit/{user}', 'UserController@edit')->name('user.edit');
       Route::post('update/{user}', 'UserController@update')->name('user.update');
       
        Route::get('vendors', 'UserController@vendors')->name('user.vendors');
    });

});

/* ----------------------- Admin Routes END -------------------------------- */
