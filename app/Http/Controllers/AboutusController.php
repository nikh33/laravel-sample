<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DateTime;
use Request;
use Redirect;
use Input;
use DB;
use Auth;
use App\AboutTable;

/**
 * Class AboutusController
 * @package App\Http\Controllers
 */
class AboutusController extends Controller {
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

  	public function showAlbum() {
  		return view('admin.aboutus')
  			->with ('pageName' , 'ABOUTUS')
  			->with ('aboutus', AboutusTable::all())
  			->with ('title' , "ABOUTUS");
    }

  	public function showAboutusForm() {
  		$user = Auth::user()->name;
  		return view('admin.aboutusform')
  			->with ('pageName' , 'STATICPAGES')
  			->with ('title' , "Aboutus Form");
    }

  	public function saveAboutusForm() {
  		$records=count(AboutTable::all());
  		$heading = Request::get('albumname');
  		$ca = new AboutTable();
  		$ca->about_content_title = $heading;
  		if($records>0) {
  			echo $id=Request::get('id');die;
  			About::where('id',$id)->update();
  		}else {
  			$ca->save();
  		}
  		return Redirect::to('dashboard/aboutus/form');
  	}

  	public function editAboutusForm($id) {
  	  return view('admin.aboutusform')
  			->with ('pageName' , 'AboutusForm')
  			->with ('title' , "Aboutus Form")
  			->with ('aboutus', AboutusTable::find($id));
  	}

  	public function updateAboutusForm() {
      try{
        $user_id = Auth::user()->id;
    		$ca = Aboutus::find(Input::get('id'));
  			$ca->aboutus_name = Input::get('aboutusname');
  			$ca->save();
      } catch (\Exception $ex) {
          DB::rollback();
      }
  		return Redirect::to('aboutus');
  	}

  	public function deleteAboutusForm($id) {
  		Aboutus::where('id',$id)->delete();
  		return Redirect::to('aboutus');
  	}
}
