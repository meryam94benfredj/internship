<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['book_name','image','author','price','number_pages'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
