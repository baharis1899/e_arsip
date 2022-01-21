<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Kategori extends Model
{
    use softDeletes;
    protected $table='kategori';
    protected $fillable=[
        'name_category'
    ];
    
}
