<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller {

	public function __construct() {
        $this->middleware('auth');
  }

	public function showUsers() {

		$user = DB::table('users')
            ->leftjoin('company', 'company.id', '=', 'users.company_id')
            ->select('users.*', 'company.company_name')
            ->get();

		$user_id = Auth::user()->name;

		return view ('user')
			->with ('pageName' , 'USER')
			->with ('title' , "Users Manager")
			->with ('users', $user)
			->with ('userlog', $user_id)
		  ->with ('companies', Company::all());
	}

	public function addUser() {
		$user = new User;
		$badgeId = \Request::get('badgeId');
		$password = \Request::get('password');
		$cpassword = \Request::get('cpassword');
		$user_type = \Request::get('user_type');
		$empId="Name";
    if($user_type == 'SuperAdmin') {
        $company_id = 0;
    } else {
       $company_id = \Request::get('company_id');
    }

		if($badgeId==null || $password!=$cpassword ){
			return "Something Went Wrong";
		}

		$user->username = $badgeId;
		$user->password=bcrypt($password);
		$user->name=$user_type;
		$user->company_id=$company_id;
		$user->active= 1;

		$user->accessed_at = date('Y-m-d H:i:s');
		$user->save();

		return redirect('/users');
	}

	public function showChangePasswordUser($id) {
		$errors = Array();
		return view ('auth/register')
			->with ('errors', $errors)
			->with ('users', User::find($id));
	}


	public function changePasswordUser(){
		$errors = Array();
		$id = \Request::get('username');

		$newpass = \Request::get('password');
       $newpassconfirmation  = \Request::get('password_confirmation');
		$user = User::find($id);
		if (!Auth::validate(array('id' => Auth::user()->id, 'password' => \Request::get('old_password')))){
			array_push ($errors, "The old password is not correct");	;
		}

		if($newpass != $newpassconfirmation){
			array_push ($errors, "Passwords are not coincident");
		}
		if($this->validPass ($newpass)){
			array_push ($errors, "New password does not comply with the security required (at least 6 characters length, one uppercase, one lowercase and one number");
		}

		if (count($errors)>0){
			return view ('auth/register')
				->with ('errors', $errors)
				->with ('users', User::find($id));
		}else{
			$user->id = $id;
			$user->password = bcrypt($newpass);
			$user->save();
			return redirect('/home');
		}
	}

	private function validPass ($candidate){
		if (preg_match_all('$\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$', $candidate))
			return false;
		return true;
	}
}
