<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class SuratKeluar extends Model
{
    use softDeletes;

    protected $table='suratkeluar';
    protected $fillable=[
        'latter_code','title','description','regarding','category_id','user_id','files'
    ];
        public function kategori_id_keluar(){
        return $this->belongsTo(Kategori::class,'category_id','id');
    }
}
