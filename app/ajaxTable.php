<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ajaxTable extends Model
{
    protected $fillable = [
    	'name', 'roll', 'mobile','slug'
    ];
}
