<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookReturn extends Model
{
    protected $table = 'book_return';
    protected $primaryKey = 'book_return_id';
    public $timestamps = true;

    protected $fillable = ['book_borrow_id', 'date_of_returning', 'fine'];
}
