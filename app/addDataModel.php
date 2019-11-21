<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addDataModel extends Model
{
    //protected $table = 'students';
    protected $table = 'details';
	//public $timestamps = false;
	protected $fillable = [
        'name', 'roll', 'class','dept',
    ];
}
