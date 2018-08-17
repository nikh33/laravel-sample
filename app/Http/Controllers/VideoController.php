<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DateTime;
use Auth;
use Request;
use DB;
use App\Video;

/**
 * Class VideoController
 * @package App\Http\Controllers
 */

class VideoController extends Controller {

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

  	public function showVideo() {
  		return view('admin.video')
  			->with ('pageName' , 'VIDEO')
  			->with ('video', Video::all())
  			->with ('title' , "VIDEO");
    }

    public function showVideoForm() {
  		$user = Auth::user()->name;
  		return view('admin.videoform')
  			->with ('pageName' , 'Videoform')
  			->with ('title' , "Video Form");
    }

  	public function saveVideoForm(VideoRequest $request) {
  		$ca = new Video();
  		$ca->video_name = $request -> input('videoname');
  		$ca->save();
  		return Redirect::to('video');
  	}

  	public function editVideoForm($id) {
  		return view('admin.videoform')
  			->with ('pageName' , 'VideoForm')
  			->with ('title' , "Video Form")
  			->with ('video', Video::find($id));
  	}

  	public function updateVideoForm() {
      try {
        $user_id = Auth::user()->id;
    		$ca = Video::find(Input::get('id'));
  			$ca->video_name = Input::get('videoname');
  			$ca->save();
      } catch (\Exception $ex) {
          DB::rollback();
      }
  		return Redirect::to('video');
  	}

  	public function deleteVideoForm($id) {
  		Video::where('id',$id)->delete();
  		return Redirect::to('video');
  	}
}
