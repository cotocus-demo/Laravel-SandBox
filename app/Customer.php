<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	public $table = "_customer";
    protected $fillable = ['name'];
}
