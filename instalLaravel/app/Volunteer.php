<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Volunteer extends Model
{
    //// Digunakan untuk menggunakan soft delete secara default saat menghapus data
    use SoftDeletes;
 
    protected $fillable = [
        'nama_vol', 'phone', 'address', 'email', 'animal', 'animal_type', 'note'
    ];
    protected $dates = ['deleted_at'];
}
