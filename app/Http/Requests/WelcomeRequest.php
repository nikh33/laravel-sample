<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WelcomeRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return[
			'wtitlename' => 'required'
		];
	}
	
} 

?>