<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'book_id';
    public $timestamps = true;

    protected $fillable = ['book_name', 'author', 'desc', 'image'];
    protected $hidden = ['created_at', 'updated_at'];
}