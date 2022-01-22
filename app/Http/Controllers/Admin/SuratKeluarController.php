<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\SuratKeluar;
use App\Kategori;
use File;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('seacrh')){
            $data = SuratKeluar::with('kategori_id_keluar')->where('title','LIKE','%'.$request->seacrh.'%')->get();
        }else {
            $data = SuratKeluar::all();
        }
        return view('pages.surat_keluar.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $kategori=Kategori::all();
        return view('pages.surat_keluar.create',['kategori'=>$kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request->all());
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('files');
      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';
      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'file_pdf';
                // upload file
        $filename = $file->getClientOriginalName();
		$files = $file->move($tujuan_upload, $filename);
        // dd($files);
        $dataarray = array (
            'latter_code' => $request->latter_code,
            'title' => $request->title,
            'description' => $request->description,
            'regarding' => $request->regarding,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
            'files' => $filename
        );

        SuratKeluar::create($dataarray);
        return redirect()->route('suratkeluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $data = SuratKeluar::find($id);

        $destinationPath = 'file_pdf';
        
        File::delete($destinationPath.'/'.$data->files);
        $data->delete();
    }
    public function downloadkeluar($id){
        $data=SuratKeluar::find($id);
        $path=public_path('file_pdf/'.$data->files);
        return response()->download($path);
    }
}
