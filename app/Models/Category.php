<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['slug', 'title'];
    
    public function motors(){
      return $this->hasMany('App\Models\Motor');
    }
}
