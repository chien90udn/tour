<?php

Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::group([
    'middleware' => ['auth:admin', 'must.be.activated:admin'],
], function () {
    Route::get('/', 'HomeController@index')->name('index');

    // Groups and Users
    Route::group([
        'as' => 'accounts.',
        'prefix' => 'accounts',
        'namespace' => 'Account'
    ], function () {
        Route::get('groups/actions', 'GroupActionController@index')->name('groups.actions');
        Route::resource('groups', 'GroupController', ['except' => ['show', 'destroy']]);

        Route::get('users/actions', 'UserActionController@index')->name('users.actions');
        Route::resource('users', 'UserController', ['except' => ['show', 'destroy']]);
        Route::put('users/{user}/photo', 'UserPhotoController@update')->name('users.photo.update');
        Route::delete('users/{user}/photo', 'UserPhotoController@destroy')->name('users.photo.destroy');
    });


    // Page
    Route::group([
       'namespace' => 'Page',
    ], function (){
        Route::get('pages/actions', 'PageActionController@index')->name('pages.actions');
        Route::resource('pages', 'PageController', ['except' => ['show', 'destroy']]);
    });

    // Tours
    Route::group([
        'as' => 'tours.',
        'prefix' => 'tours',
        'namespace' => 'Tour'
    ], function () {

        Route::get('tours/actions', 'TourActionController@index')->name('tours.actions');
        Route::resource('tours', 'TourController', ['except' => ['show', 'destroy']]);

        Route::get('destinations/actions', 'DestinationActionController@index')->name('destinations.actions');
        Route::resource('destinations', 'DestinationController', ['except' => ['show', 'destroy']]);

        Route::get('groups/actions', 'GroupActionController@index')->name('groups.actions');
        Route::resource('groups', 'GroupController', ['except' => ['show', 'destroy']]);
         
        Route::get('hotelcategory/actions', 'HotelCategoryActionController@index')->name('hotelcategory.actions');
        Route::resource('hotelcategory', 'HotelCategoryController', ['except' => ['show', 'destroy']]);

        Route::get('hotels/actions', 'HotelActionController@index')->name('hotels.actions');
        Route::resource('hotels', 'HotelController', ['except' => ['show', 'destroy']]);

        Route::get('cruises/actions', 'CruisesActionController@index')->name('cruises.actions');
        Route::resource('cruises', 'CruisesController', ['except' => ['show', 'destroy']]);

        Route::get('cruisescategory/actions', 'CruisesCategoryActionController@index')->name('cruisescategory.actions');
        Route::resource('cruisescategory', 'CruisesCategoryController', ['except' => ['show', 'destroy']]);

        Route::get('cruisestours/actions', 'CruisesTourActionController@index')->name('cruisestours.actions');
        Route::resource('cruisestours', 'CruisesTourController', ['except' => ['show', 'destroy']]);

    });

    //  Theme
    Route::group([
        'as' => 'themes.',
        'prefix' => 'themes',
        'namespace' => 'Theme'
    ], function () {
        Route::resource('menus', 'MenuController', ['except' => ['show']]);
        Route::resource('menus.item', 'ItemController', ['except' => ['show']]);
        Route::name('menus.item.sort')->put('/menus/{menu}/item', 'ItemController@sort');

        Route::post('option', 'ThemeController@save')->name('option.save');
        Route::get('option', 'ThemeController@index')->name('option.index');
    });

    // Option
    Route::group([
        'namespace' => 'Option'
    ], function () {
        Route::post('/option', 'OptionController@save')->name('option.save');
        Route::get('/option', 'OptionController@index')->name('option.index');
    });

    // Contact
    Route::group([
        'namespace' => 'Contact'
    ], function () {
        Route::get('contact/actions', 'ContactActionController@index')->name('contact.actions');
        Route::resource('contact', 'ContactController');
    });

    // Customized
    Route::group([
        'namespace' => 'Customized'
    ], function () {
        // Route::get('customized/actions', 'CustomizedActionController@index')->name('customized.actions');
        Route::resource('customized', 'CustomizedController');
    });

    // Booking
    Route::group([
        'namespace' => 'Booking'
    ], function () {
        Route::get('booking/actions', 'BookingActionController@index')->name('booking.actions');
        Route::resource('booking', 'BookingController');
    });

    // Contact
    Route::group([
        'namespace' => 'Crawler'
    ], function () {
        Route::name('admin.crawler.getlist')->post('crawler/getlist', 'CrawlerController@getList');
        Route::name('admin.crawler.getCruises')->post('crawler/getCruises', 'CrawlerController@getCruises');
        Route::resource('crawler', 'CrawlerController');
    });


    // PostCategory
    Route::group([
        'namespace' => 'PostCategory'
    ], function () {
        Route::name('post.category.actions')->get('post/category/actions', 'PostCategoryActionController@index');
        Route::name('post.category.index')->get('/post/category', 'PostCategoryController@index');
        Route::name('post.category.create')->get('/post/category/create', 'PostCategoryController@create');
        Route::name('post.category.store')->post('/post/category', 'PostCategoryController@store');
        Route::name('post.category.edit')->get('/post/category/{postCategory}/edit', 'PostCategoryController@edit');
        Route::name('post.category.update')->put('/post/category/{postCategory}', 'PostCategoryController@update');
        Route::name('post.category.destroy')->delete('/post/category/{postCategory}', 'PostCategoryController@destroy');
    });

    // Post
    Route::group([
        'namespace' => 'Post'
    ], function () {
        Route::get('post/actions', 'PostActionController@index')->name('post.actions');
        Route::resource('post', 'PostController', ['except' => ['show', 'destroy']]);
    });
});