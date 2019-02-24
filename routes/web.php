<?php

// Route::get('/', function () {
//     return redirect('');
// });

//Route::get('/admin/{demopage?}', 'DemoController@demo')->name('demo');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', 'PagesController@about');
Route::get('/about-ecosystem', 'PagesController@aboutecosystem');
Route::get('/how-to', 'PagesController@howto');
Route::get('/forum', 'PagesController@forum');
Route::get('/blogs', 'PagesController@blogs');
Route::get('/event-session', 'PagesController@eventsession');
Route::get('/faqs', 'PagesController@faqs');
Route::get('/schemes', 'PagesController@schemes');
Route::get('/templates', 'PagesController@templates');
Route::get('/live-session', 'PagesController@livesession');
Route::get('/tutorial', 'PagesController@tutorial');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// mentee routes sanya
Route::get('/admin/Startup-inital','StartupController@index');



// Mentor routes tanya
Route::get('/menteeapplyform', 'StartupController@menteeapplyform');
Route::get('/admin/mentor-inital','MentorController@index');








// incubator routes shubham
Route::get('/admin/incubator-inital','IncubatorController@index');







// Accelarator routes abhishek
Route::get('/admin/accelarator-inital','AccelaratorController@index');









// Investor routes prakash
Route::get('/admin/investor-inital','InvestorController@index');










// service provider routes divyam
Route::get('/admin/servviceprovider-inital','ServiceprovController@index');

