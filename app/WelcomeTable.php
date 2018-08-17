<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WelcomeTable extends Model {
    public $table = "welcome_table";
	protected $primaryKey = 'welcome_id';
}
