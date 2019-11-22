<?php
use Illuminate\Support\Facades\Route;

Route::get('language/{locale}', 'LocalizationController@index')->name('home');

/**
 * ----------------------------------------
 * |                                      |
 * |        Backend Routes                |
 * |                                      |
 * ----------------------------------------
 */

Route::prefix('backarea')->group(function () {

    Auth::routes();

    /**
     * The Routes that need an authentication to view it
     */
    Route::middleware('auth')->group(function () {

        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/home', 'HomeController@index')->name('home');

        /**
         * Skills Routes
         */
        Route::resource('skills', 'Backend\SkillsController');
     /**
         courses routes
      **/
		Route::resource('course', 'Backend\CourseController');
		
        /**
         * Settings Routes
         */
        Route::get('settings', 'Backend\SettingsController@index')->name('settings.index');
        Route::put('settings/info', 'Backend\SettingsController@info')->name('settings.info');
        Route::put('settings/about', 'Backend\SettingsController@about')->name('settings.about');
        Route::put('settings/social', 'Backend\SettingsController@social')->name('settings.social');

        /**
         * Customers section Routes
         */
        Route::resource('customers', 'Backend\CustomersController');

        /**
         * contacts Routes
         */
        Route::get('contacts/trash', 'Backend\ContactsController@trash')->name('contacts.trash');
        Route::put('contacts/trash/{id}', 'Backend\ContactsController@trashPost')->name('contacts.trashPost');
        Route::delete('contacts/trash/{id}', 'Backend\ContactsController@trashDestroy')->name('contacts.trashDestroy');

        Route::get('contacts/favourite', 'Backend\ContactsController@favourite')->name('contacts.favourite');
        Route::put('contacts/favourite/{id}', 'Backend\ContactsController@favouritePost')->name('contacts.favouritePost');

        Route::get('contacts/inbox', 'Backend\ContactsController@inbox')->name('contacts.inbox');
        Route::post('contacts/inbox', 'Backend\ContactsController@inbox')->name('contacts.inbox');

        Route::resource('contacts', 'Backend\ContactsController');

        /**
         * Services Routes
         */
        Route::resource('services', 'Backend\ServicesController');

        /**
         * Partners Routes
         */
        Route::resource('partners', 'Backend\PartnersController');

        /**
         * Users Routes
         */
        Route::resource('users', 'Backend\UsersController');

        /**
         * Team Memebers Routes
         */
        Route::resource('members', 'Backend\MemebersController');

        /**
         * Sections Routes
         */
        Route::resource('sections', 'Backend\SectionsController');

        /**
         * Portfolio Routes
         */
        Route::resource('portfolios', 'Backend\PortfoliosController');

    });
});


/**
 * ----------------------------------------
 * |                                      |
 * |        Frontend Routes               |
 * |                                      |
 * ----------------------------------------
 */


/* Route::middleware('soon')->group(function() {
    Route::get('/', function () {
        return view('soon');
    })->name('soon');
 
}); */



Route::get('/ck', function(){
    return view('frontend.ck');
});

/**
 * Landing Page Routes
 */
Route::get('/', 'FrontController@landing')->name('main');

/**
 * Contact Page Routes
 */
// Route::get('/contact', 'FrontController@contactForm')->name('contact');
Route::post('/contact', 'FrontController@contact')->name('contact');

/**
 * About Page Routes
 */
Route::get('/about', 'FrontController@about')->name('about');

Route::get('/courses_objectives','FrontController@index')->name('courses_objectives');

Route::get('/learning_paths','FrontController@learning')->name('learning_paths');

Route::get('/after-learning','FrontController@afterLearning')->name('after_learning');

Route::get('/courses_details/{id}','FrontController@courseDetails')->name('course-details');

Route::get('customer/login', 'Customer\LoginController@showLoginForm')->name('customer.login');

Route::post('customer/login', 'Customer\LoginController@login');

Route::get('customer/register', 'Customer\RegisterController@showRegistrationForm')->name('customer.register');

Route::post('customer/register', 'Customer\RegisterController@register');

Route::middleware('auth:customer')->group(function () {
    Route::get('/customer/home', 'Customer\HomeController@index');
});