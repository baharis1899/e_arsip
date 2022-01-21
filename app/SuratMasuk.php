<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class SuratMasuk extends Model
{
    use softDeletes;
    protected $table='suratmasuk';
    protected $fillable=[
        'latter_code','title',
        'description','sender','regarding',
        'category_id','user_id','files'
    ];
    public function kategori_id(){
        return $this->belongsTo(Kategori::class,'category_id','id');
    }
}
