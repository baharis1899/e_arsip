<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratMasuk;
use App\SuratKeluar;
use App\Disposisi;

class DashboardController extends Controller
{
    public function index(){

        $masuk=SuratMasuk::count();
        $keluar=SuratKeluar::count();
        $disposisi=Disposisi::count();
        return view('pages.dasbord',[
            'masuk' => $masuk,
            'keluar' => $keluar,
            'disposisi' => $disposisi
        ]);
    }
}
