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
    public function kategorimasuk(){
        return $this->hasMany(SuratMasuk::class,'category_id','id');
    }
    public function kategorikeluar(){
        return $this->hasMany(SuratKeluar::class,'category_id', 'id');
    }
}
