<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // By default, name of table is 'authors'
    //protected $table = 'oZ1_authors';

    //protected $primaryKey = 'flight_id';

    // Check documentation for more : 
    // https://laravel.com/docs/6.x/eloquent

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
