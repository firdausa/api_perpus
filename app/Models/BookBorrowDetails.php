<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookBorrowDetails extends Model
{
    protected $table = 'book_borrow_details';
    protected $primaryKey = 'book_borrow_detail_id';
    public $timestamps = true;

    protected $fillable = ['book_borrow_id', 'book_id', 'qty'];

    public function book() {
        return $this->belongsTo('App\Models\Book','book_id','book_id');
    }
}
