<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Disposisi;
use PDF;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('seacrh')){
            $data = Disposisi::where('title','LIKE','%'.$request->seacrh.'%')->get();
        }else {
            $data = Disposisi::all();
        }
        return view('pages.disposisi_perintah.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.disposisi_perintah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Disposisi::create($request->all());
        return redirect()->route('disposisi.index');
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
        $item =Disposisi::findOrFail($id);
        return view('pages.disposisi_perintah.edit',['item'=>$item]);
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
        $item=$request->all();
        $data=Disposisi::findOrFail($id);
        $data->update($item);
        return redirect()->route('disposisi.index');
    }

    public function printReport($id)
    {
        $data['disposisi'] = Disposisi::find($id);

        $pdf = PDF::loadView('pages.riport.disposisi', $data);
        return $pdf->download();
        // return view('pages.riport.disposisi', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Disposisi::findOrFail($id);
        $item->delete();
        return redirect()->route('disposisi.index');
    }
}
