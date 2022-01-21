<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Disposisi extends Model
{
    use softDeletes;
    protected $table='disposisi';
    protected $fillable=[
        'title','description','letter_maker'
    ];
}
