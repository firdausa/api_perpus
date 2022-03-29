<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookBorrow extends Model
{
    protected $table = 'book_borrow';
    protected $primaryKey = 'book_borrow_id'; //id
    public $timestamps = true;

    protected $fillable = ['student_id', 'date_of_borrowing', 'date_of_returning'];

    public function student() {
        return $this->belongsTo('App\Models\Students','student_id','student_id');
    }
}

