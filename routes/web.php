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
Route::get('/admin/Startup-inital','StartupController@index')->name('startup.auth');
Route::get('/stakeholdersindex','StakeholderController@registration1');
Route::get('/stakeholdersprofile','StakeholderController@stakeholdersprofile');
Route::get('/reglvl1','StakeholderController@reglvl1');
Route::get('/reglvl2','StakeholderController@reglvl2');
Route::get('/profile','StakeholderController@profile');




// Mentor routes tanya
Route::get('/mouform','StartupController@mouform');
Route::get('/menteeapplyform', 'StartupController@menteeapplyform');
Route::get('/admin/mentor-inital','MentorController@index')->name('mentor.auth');
Route::get('/chat', 'StartupController@chat');
Route::get('/videocall', 'StartupController@videocall');
Route::get('/ongoingconnection', 'StartupController@ongoingconnection');

//Mentor Routes _Divyam
Route::get('/admin/{id}/uploads', 'MentorController@uploads');






//DataRepository Routes _Divyam
Route::resource('data_repository','DataRepController');
Route::get('/data_repository/download/{id}', 'DataRepController@download')->name('downloadfile');



//stakeholder routes
Route::get('/stakeholdersindex','StakeholderController@registration1');
Route::get('/stakeholdersprofile','StakeholderController@stakeholdersprofile');
Route::get('/reglvl1','StakeholderController@reglvl1');
Route::get('/admin/stakeholder-inital','StakeholderController@index')->name('stakeholder.auth');
Route::get('/list_stakeholders','StartupController@list_stakeholders');
Route::get('/list_mentors','StartupController@list_mentors');
Route::get('/dashboard','StartupController@dashboard');
// service provider routes divyam
//Route::get('/admin/servviceprovider-inital','ServiceprovController@index');
//edited by Divyam
Route::get('/admin/stakeholder-inital','StakeholderController@index');
