<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students'; //$table menyimpan informasi nama tabel customers
    public $timestamps = true;
    public $primaryKey = 'student_id';

    protected $fillable = ['student_name', 'date_of_birth', 'gender', 'address', 'class_id'];

    public function class() {
        return $this->belongsTo('App\Models\Grade','class_id','class_id');
    }
}
