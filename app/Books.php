<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'book_id','book_name','book_cover','book_category', 'book_price', 'book_page_per_book','book_size','book_score','book_demo','book_description','book_address',
    ];
}
