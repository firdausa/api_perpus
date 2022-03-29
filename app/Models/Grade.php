<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grade';
    public $timestamps = true;
    public $primaryKey = 'class_id';

    protected $fillable = ['class_name', 'group'];
}
