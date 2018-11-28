<?php

Route::Auth();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/v1', 'HomeController@v1')->name('v1');

Route::get('contact-us.html','PageController@contact');
Route::name('post.contact')->post('contact-us.html', 'PageController@postContact');

Route::name('customizedtours')->get('customized-tour.html','PageController@customized');
Route::name('customizedtours.post')->post('customized-tour.html','PageController@postCustomized');


Route::name('location.show')->get('/{slug}.html', 'LocationController@show');
Route::name('location.all')->get('destinations/{country}', 'LocationController@all');

Route::name('tours.search')->get('tours/search', 'TourController@search');
Route::name('tours.show')->get('tours/{slug}.html', 'TourController@show');
Route::name('tours.map.show')->get('tour-map/{slug}.html', 'TourController@map');
Route::name('group.show')->get('tours/{slug}', 'TourCategoryController@show');

Route::name('tour.booking')->post('tour/booking', 'BookController@tourBooking');


Route::name('hotel.show')->get('hotel/{slug}.html', 'HotelController@show');
Route::name('hotel.category')->get('hotels/{slug}', 'HotelCategoryController@show');

Route::name('cruise.show')->get('cruise/{slug}.html', 'CruisesController@show');
Route::name('cruise.show.booking')->post('cruise/{slug}/booking.html', 'CruisesController@booking');
Route::name('cruise.show.v1')->get('cruise/{slug}.html/v1', 'CruisesController@showv1');
Route::name('cruise.category')->get('cruises/{slug}', 'CruisesCategoryController@show');

Route::name('post.category.show')->get('blogs/{slug}', 'CategoryController@show');

Route::name('post.show')->get('blog/{slug}.html', 'PostController@show');

Route::name('page.show')->get('pages/{slug}.html', 'PageController@show');


Route::get('/overview/vietnam', function (){
    return view('overview.vietnam');
});
Route::get('/overview/thailand', function (){
    return view('overview.thailand');

});Route::get('/overview/laos', function (){
    return view('overview.laos');

});Route::get('/overview/myanmar', function (){
    return view('overview.myanmar');

});Route::get('/overview/cambodia', function (){
    return view('overview.cambodia');
});


Route::name('ajax.contact')->get('ajax-quickcontact', 'AjaxController@quickcontact');
Route::get('success','AjaxController@success');

