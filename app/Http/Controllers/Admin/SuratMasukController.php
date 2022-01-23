<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\SuratMasuk;
use App\Kategori;
use Image;
use File;


class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('seacrh')){
            $data = SuratMasuk::with('kategori_id')->where('title','LIKE','%'.$request->seacrh.'%')->get();
        }else {
            $data = SuratMasuk::all();
        }
        return view('pages.surat_masuk.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori=Kategori::all();
        $SuratMasuk=SuratMasuk::all();
        return view('pages.surat_masuk.create',[
            'kategori'=>$kategori,
            'SuratMasuk'=>$SuratMasuk
        ]);
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
            'sender' => $request->sender,
            'regarding' => $request->regarding,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
            'files' => $filename
        );

        SuratMasuk::create($dataarray);
        return redirect()->route('suratmasuk.index');
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
        $data = SuratMasuk::find($id);

        $destinationPath = 'file_pdf';
        
        File::delete($destinationPath.'/'.$data->files);
        $data->delete();
    }

    public function downloadfile($id){
        $data=SuratMasuk::find($id);
        $path=public_path('file_pdf/'.$data->files);
        return response()->download($path);
    }
}
