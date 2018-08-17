<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpcomingEvent extends Model {
    public $table = "upcoming_event";
	protected $primaryKey = 'event_id';
}
