<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $guarded = [];

    protected $fillable = [];


   	public function category()
   	{
   		return $this->belongsTo('App\Category');
   	}

    
}
