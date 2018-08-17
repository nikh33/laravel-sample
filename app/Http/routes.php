<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Admin Routes */
Route::group(['middleware' => ['web'],'prefix' => 'dashboard'], function() {
    Route::auth();

	Route::get('/home', 'HomeController@showSite');
	Route::get('/join', 'HomeController@joiningList');
	Route::get('/album', 'AlbumController@showAlbum');
	Route::get('/album/form', 'AlbumController@showAlbumForm');
	Route::post('/album/savealbum', 'AlbumController@saveAlbumForm');
	Route::get('/album/{id}/form', 'AlbumController@editAlbumForm');
	Route::post('/album/updatealbum/', 'AlbumController@updateAlbumForm');
	Route::get('/album/deletealbum/{id}', 'AlbumController@deleteAlbumForm');

	Route::get('/event', 'EventController@showEvent');
	Route::get('/event/form', 'EventController@showEventForm');
	Route::post('/event/saveevent', 'EventController@saveEventForm');
	Route::get('/event/{id}/form', 'EventController@editEventForm');
	Route::post('/event/updateevent/', 'EventController@updateEventForm');
	Route::get('/event/deleteevent/{id}', 'EventController@deleteEventForm');


	Route::get('/video', 'VideoController@showVideo');
	Route::get('/video/form', 'VideoController@showVideoForm');
	Route::post('/video/savevideo', 'VideoController@saveVideoForm');
	Route::get('/video/{id}/form', 'VideoController@editVideoForm');
	Route::post('/video/updatevideo/', 'VideoController@updateVideoForm');
	Route::get('/video/deletevideo/{id}', 'VideoController@deleteVideoForm');

	Route::get('/welcome', 'WelcomeController@showWelcome');
	Route::get('/welcome/form', 'WelcomeController@showWelcomeForm');
	Route::post('/welcome/savewelcome', 'WelcomeController@saveWelcomeForm');
	Route::get('/welcome/{id}/form', 'WelcomeController@editWelcomeForm');
	Route::post('/welcome/updatewelcome','WelcomeController@updateWelcomeForm');
	Route::get('/welcome/deletewelcome/{id}', 'WelcomeController@deleteWelcomeForm');

	Route::get('/aboutus/form', 'AboutusController@showAboutusForm');
	Route::post('/aboutus/saveaboutus', 'AboutusController@saveAboutusForm');
	Route::get('/aboutus/{id}/form', 'AboutusController@editAboutusForm');
	Route::post('/aboutus/updateaboutus/', 'AboutusController@updateAboutusForm');
	Route::get('/aboutus/deleteaboutus/{id}', 'AboutusController@deleteAboutusForm');
});


/* Frontend routes */
	Route::get('/', 'FrontController@showSite');
	Route::get('/about-thai-festive', 'FrontController@showAbout');
	Route::get('/gallery-thai-festive', 'FrontController@showGallery');
	Route::get('/video-thai-festive', 'FrontController@showVideo');
	Route::get('/sponser-thai-festive', 'FrontController@showFaq');
	Route::get('/contact-thai-festive','FrontController@showContact');
    Route::get('/upcoming-thai-festive','FrontController@showUpcoming');
	Route::get('/album-thai-festive','FrontController@showAlbum');
	Route::get('/upcoming-thai-festive-read/{id}','FrontController@showUpcomingreadmore');
	Route::get('/welcome-read/{id}','FrontController@showWelcomereadmore');
    Route::get('/ajaxSend/email/{email}/name/{name}/nick/{nick}/mobile/{mobile}/expetise/{expetise}/availablity/{availablity}', 'FrontController@ajaxSend');

    Route::get('/clear-cache', function() {
      $exitCode = Artisan::call('cache:clear');
      // return what you want
    });
