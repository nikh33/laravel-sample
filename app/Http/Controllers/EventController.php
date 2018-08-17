<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\UpcomingRequest;
use App\UpcomingEvent;
use DateTime;
use Redirect;
use Input;
use DB;
use Auth;

/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

  	public function showEvent() {
  		return view('admin.event')
  			->with ('pageName' , 'EVENT')
  			->with ('event', UpcomingEvent::all())
  			->with ('title' , "EVENT");
    }


  	public function showEventForm() {
  		$user = Auth::user()->name;
  		return view('admin.eventform')
  			->with ('pageName' , 'EventForm')
  			->with ('title' , "Event Form");
    }

  	public function saveEventForm(UpcomingRequest $request) {

      if($request->hasFile('eimage')) {
        $imageTempName = $request->file('eimage')->getPathname();
        $imageName = rand(10,100).$request->file('eimage')->getClientOriginalName();
        $path = base_path() . '/public/images/main/';
        $request->file('eimage')->move($path , $imageName);
      }
      else{
        $imageName = 'no-image.jpg';
      }

      try{
        $ca = new UpcomingEvent();
        $ca->up_event_name = $request -> input('etitle');
        $ca->up_event_description = $request -> input('edescription');
        $ca->up_event_imgpath = $imageName;
        $ca->up_event_date = $request -> input('edate');
        $ca->save();
      } catch (\Exception $ex) {
          DB::rollback();
      }
  		return Redirect::to('dashboard/event');
  	}

  	public function editEventForm($id) {
      return view('admin.eventform')
  			->with ('pageName' , 'EventForm')
  			->with ('title' , "Event Form")
  			->with ('event', UpcomingEvent::find($id));
  	}


  	public function updateEventForm(UpcomingRequest $request) {
	    $user_id = Auth::user()->id;
	    $ca = UpcomingEvent::find($request -> input('eid'));
        if($request->hasFile('eimage')) {
    		$imageTempName = $request->file('eimage')->getPathname();
    		$imageName = rand(10,100).$request->file('eimage')->getClientOriginalName();
    		$path = base_path() . '/public/images/event/';
    		$request->file('eimage')->move($path , $imageName);
    	}else{
    	  $imageName = $request -> input('eimageold');
    	}
      try {
        $ca->up_event_name = $request -> input('etitle');
    	$ca->up_event_description = $request -> input('edescription');
        $ca->up_event_imgpath = $imageName;
   	    $ca->up_event_date = $request -> input('edate');
   	    $ca->save();
      } catch (\Exception $ex) {
          DB::rollback();
      }
      return Redirect::to('dashboard/event');
  	}

  	public function deleteEventForm($id) {
  		UpcomingEvent::where('up_event_id',$id)->delete();
  		return Redirect::to('dashboard/event');
  	}
}
