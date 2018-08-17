<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DateTime;
use Auth;
use Request;
use DB;
use App\Joinuser;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function showSite() {
      return view('home')
  			->with ('pageName' , 'SITE')
  			->with ('joinusers', Joinuser::all())
  			->with ('title' , "Thaifestive Admin");
    }

  	public function joiningList(){
  		return view('admin.join')
  			->with ('pageName' , 'JOIN')
  			->with ('title' , "Joining Request")
  			->with ('joinusers', Joinuser::all());
    }
}
