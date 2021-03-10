<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regnumarchitecture extends Model
{
    

      public function portfolios(){

    	return $this->hasMany('App\Models\portfolio');
    }
}
