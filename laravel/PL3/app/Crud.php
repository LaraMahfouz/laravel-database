<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
    	'NID' ,'Fullname','Email','Mobile','Address','image'
    ];
}
