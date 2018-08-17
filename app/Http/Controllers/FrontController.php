<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DateTime;
use Request;
use DB;
use App\Site;
use PHPMailerAutoload;
use PHPMailer;
use App\Joinuser;

/**
 * Class FrontController
 * @package App\Http\Controllers
 */
class FrontController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function showSite() {
  		return view('/index')
  			->with ('pageName' , 'Home')
  			->with ('title' , "Thai Festive");
    }

  	public function showWelcomereadmore() {
  		return view('/welcomemore')
  			->with ('pageName' , 'Welcomemore')
  			->with ('title' , "Welcome Read More");
    }

  	public function showAbout() {
  		return view('/about')
  			->with ('pageName' , 'About')
  			->with ('title' , "Thai Festive About");
    }

  	public function showGallery() {
  		return view('/gallery')
  			->with ('pageName' , 'Gallery')
  			->with ('title' , "Thai Festive Gallery");
    }

  	public function showVideo() {
  		return view('/video')
  			->with ('pageName' , 'Video')
  			->with ('title' , "Thai Festive Video");
    }

  	public function showFaq() {
  		return view('/sponser')
  			->with ('pageName' , 'Sponsers')
  			->with ('title' , "Thai Festive Sponsers");
    }

  	public function showContact() {
  		return view('/contact')
  			->with ('pageName' , 'Contact')
  			->with ('title' , "Contact Us");
    }

  	public function showUpcoming() {
  		return view('/upcoming')
  			->with ('pageName' , 'Upcoming')
  			->with ('title' , "Upcoming Event");
    }

  	public function showUpcomingreadmore() {
  		return view('/upcomingreadmore')
  			->with ('pageName' , 'Upcoming')
  			->with ('title' , "Upcoming Event Read More");
    }

  	public function showAlbum() {
  		return view('/album')
  			->with ('pageName' , 'Album')
  			->with ('title' , "Album");
    }

  	public function ajaxSend(
		$email,
		$name,
		$nick,
		$mobile,
		$expetise,
		$availablity) {
        $user = DB::table('joinuser')
						->select('email')
						->where('email', '=', $email);

        try {
	        $count = $user->count();
	        if($count == 0){
	  	      $e = new Joinuser();
	          $e->name = $name;
		      $e->nickname = $nick;
			  $e->mobile = $mobile;
			  $e->email = $email;
			  $e->expertise = $expetise;
			  $e->availablity = $availablity;
			  $e->save();
			  return 1;
		    }
			else{
			  return 0;
			}
       	} catch (\Exception $ex) {
            DB::rollback();
        }
      }
}
