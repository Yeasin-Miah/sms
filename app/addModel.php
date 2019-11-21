<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    //protected $table = 'students';
    protected $table = 'details';
	//public $timestamps = false;
	protected $fillable = [
        'name', 'roll', 'class','dept',
    ];
}
