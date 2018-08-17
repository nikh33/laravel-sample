<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\WelcomeRequest;
use App\WelcomeTable;
use DateTime;
use Redirect;
use Input;
use DB;
use Auth;

class WelcomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct() {
        $this->middleware('auth');
    }

  	public function showWelcome() {
  		return view('admin.welcome')
  			->with ('pageName' , 'WELCOME')
  			->with ('welcome', WelcomeTable::all())
  			->with ('title' , "WELCOME");
    }

  	public function showWelcomeForm() {
  		$user = Auth::user()->name;
  		return view('admin.welcomeform')
  			->with ('pageName' , 'WelcomeForm')
  			->with ('title' , "Welcome Form");
    }

  	public function saveWelcomeForm(WelcomeRequest $request) {
      if($request->hasFile('wimage')) {
        $imageTempName = $request->file('wimage')->getPathname();
        $imageName = rand(10,100).$request->file('wimage')->getClientOriginalName();
        $path = base_path() . '/public/images/main/';
        $request->file('wimage')->move($path , $imageName);
      }
      else{
        $imageName = $request -> input('wimageold');
      }
      $ca = new WelcomeTable();

      try {
        	$ca->wel_content_title = $request -> input('wtitlename');
  			$ca->wel_content_description = $request -> input('wdescname');
  			$ca->img_path = $imageName;
  			$ca->save();
      } catch (\Exception $ex) {
          DB::rollback();
      }
  		return Redirect::to('dashboard/welcome');
  	}

  	public function editWelcomeForm($id) {
	     return view('admin.welcomeform')
  			->with ('pageName' , 'WelcomeForm')
  			->with ('title' , "Welcome Form")
  			->with ('welcome', WelcomeTable::find($id));
  	}


  	public function updateWelcomeForm(WelcomeRequest $request) {
	  	$user_id = Auth::user()->id;
  		$ca = WelcomeTable::find($request -> input('wid'));
  		if($request->hasFile('wimage')) {
  			$imageTempName = $request->file('wimage')->getPathname();
			$imageName = rand(10,100).$request->file('wimage')->getClientOriginalName();
			$path = base_path() . '/public/images/main/';
			$request->file('wimage')->move($path , $imageName);
		}
		else{
		  $imageName = $request -> input('wimageold');
		}

	    try {
	        $ca->wel_content_title = $request -> input('wtitlename');
	  			$ca->wel_content_description = $request -> input('wdescname');
	  			$ca->img_path = $imageName;
	  			$ca->save();
	    } catch (\Exception $ex) {
	            DB::rollback();
	    }
  		return Redirect::to('dashboard/welcome');
  	}

  	public function deleteWelcomeForm($id) {
  		WelcomeTable::where('welcome_id',$id)->delete();
  		return Redirect::to('dashboard/welcome');
  	}
}
