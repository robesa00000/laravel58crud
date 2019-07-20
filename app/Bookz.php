<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookz extends Model
{
    protected $fillable = ['book_name', 'isbn_no', 'book_price'];
}
