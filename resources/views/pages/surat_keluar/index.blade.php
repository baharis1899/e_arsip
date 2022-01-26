@extends('layout.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Kategori</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item "><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Surat Keluar</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<form class="mt-4 row g-3" action="suratkeluar" method="get">
    @csrf
    <div class="col-auto">
        <input style="width: 400px" type="text" class="form-control" id="seacrh" name="seacrh"
            placeholder="Masukan Pencarian Judul Surat Keluar" value="{{ old('seacrh') }}">
    </div>
    <div class="col-auto">
        <input type="submit" value="Cari" class="btn btn-primary mb-3">
        <a href="{{route('suratkeluar.create')}}" class="btn btn-secondary mb-3"><i class="fas fa-plus"></i>Tambah
            Data</a>
    </div>
</form>

@php
$i=1;
@endphp
<table class="table table-sm table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Surat</th>
            <th scope="col">Judul Surat</th>
            <th scope="col">Deskrepsi</th>
            <th scope="col">Prihal</th>
            <th scope="col">kategori</th>
            <th scope="col">User Input</th>
            <th scope="col">files</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $item)
        <tr>
            <th scope="col">{{$i++}}</th>
            <th scope="col">{{$item->latter_code}}</th>
            <th scope="col">{{$item->title}}</th>
            <th scope="col">{{$item->description}}</th>
            <th scope="col">{{$item->regarding}}</th>
            <th scope="col">{{$item->category_id}}}</th>
            <th scope="col">{{$item->user_id=Auth::user()->name}}</th>
            <th scope="col">{{$item->files}}</th>
            <th scope="col">
                <a href="/downloadkeluar/{{$item->id}}" class="btn btn-info">
                    <i class="fas fa-download"></i>
                </a>
                <a href="javascript:void(0)" class="btn btn-danger delete" 
                data-url="{{route('suratkeluar.destroy',$item->id)}}" data-label="surat keluar">
                <i class="fa fa-trash"></i></a>
            </th>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">
                Data Kosong
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection