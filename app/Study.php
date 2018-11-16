<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    Protected $guarded = array('id');

    public static $rules = array (
        'name' => 'required',
        'date' => 'date',
        'hour' => 'integer|min:0|max:23',
        'minute' => 'integer|min:0|max:59',
        'comment' => 'required'
    );
}
