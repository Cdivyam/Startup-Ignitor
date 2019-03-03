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
Route::get('/news', 'PagesController@news');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// mentee routes sanya
Route::get('/admin/Startup-inital','StartupController@index');
Route::get('/stakeholdersindex','StakeholderController@registration1');
Route::get('/stakeholdersprofile','StakeholderController@stakeholdersprofile');
Route::get('/reglvl1','StakeholderController@reglvl1');
Route::get('/reglvl2','StakeholderController@reglvl2');
Route::get('/profile','StakeholderController@profile');

//Stakeholder routes sanya
// Route::get('/admin/Startup-inital','StartupController@index'); //not working
Route::get('/stakeholdersprofile','StakeholderController@stakeholdersprofile'); //working but not con=mplete
Route::get('/reglvl1','StakeholderController@reglvl1'); //working
Route::get('/reglvl2','StakeholderController@reglvl2'); //working
Route::get('/profile','StakeholderController@profile'); //not working, broken
Route::get('/stakeholderform','StakeholderController@stakeholderform'); //





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

// service provider routes divyam
//Route::get('/admin/servviceprovider-inital','ServiceprovController@index');
//edited by Divyam
// Route::get('/admin/stakeholder-inital','StakeholderController@index');
Route::post('/admin/reglvl1', 'StakeholderController@store');
//abhishek
 
Route::get('/dashboard','StartupController@dashboard')->name('startup.auth');

Route::get('/dashboard','StartupController@dashboard')->name('startup.auth');
Route::get('/mentor_dashboard','MentorController@dashboard');
Route::get('/update','MentorController@update');
Route::get('/application','StartupController@application');
Route::get('/viewprofile','StartupController@viewprofile');
Route::get('/myapplication','MentorController@myapplication');
Route::get('/mystats','MentorController@mystats');
Route::get('/blacklists','MentorController@blacklists');
Route::get('/mentorviewprofile','MentorController@mentorviewprofile');





//sanya






//tanya
Route::get('/stakeholderdashboard','StakeholderController@stakeholderdashboard');
Route::get('/mentorapplyform','MentorController@mentorapplyform');




//prakash
Route::get('/verify/{token}','VerifyController@verify')->name('verify');




//shubham





//divyam





