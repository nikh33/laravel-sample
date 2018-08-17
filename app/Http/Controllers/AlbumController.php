<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DateTime;
use Request;
use Redirect;
use Input;
use DB;
use Auth;
use App\Album;

/**
 * Class AlbumController
 * @package App\Http\Controllers
 */
class AlbumController extends Controller {
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

  	public function showAlbum(){
  		return view('admin.album')
  			->with ('pageName' , 'ALBUM')
  			->with ('album', Album::all())
  			->with ('title' , "ALBUM");
    }

  	public function showAlbumForm() {
  		$user = Auth::user()->name;
  		return view('admin.albumform')
  			->with ('pageName' , 'AlbumForm')
  			->with ('title' , "Album Form");
  	}

  	public function saveAlbumForm(AlbumRequest $request) {
    	try{
        $ca = new Album();
    		$ca->album_name = $request -> input('albumname');
    		$ca->save();
      } catch (\Exception $ex) {
          DB::rollback();
      }
  		return Redirect::to('album');
  	}

  	public function editAlbumForm($id) {
  		return view('admin.albumform')
  			->with ('pageName' , 'AlbumForm')
  			->with ('title' , "Album Form")
  			->with ('album', Album::find($id));
  	}

  	public function updateAlbumForm() {
      try{
        $user_id = Auth::user()->id;
    		$ca = Album::find(Input::get('id'));
  			$ca->album_name = Input::get('albumname');
  			$ca->save();
      } catch (\Exception $ex) {
          DB::rollback();
      }
  		return Redirect::to('album');
  	}

  	public function deleteAlbumForm($id) {
  		Album::where('id',$id)->delete();
  		return Redirect::to('album');
  	}
}
