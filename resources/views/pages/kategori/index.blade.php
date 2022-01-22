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
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<form class="mt-4 row g-3" action="kategori" method="get">
    @csrf
    <div class="col-auto">
        <input style="width: 400px" type="text" class="form-control" id="seacrh" name="seacrh"
            placeholder="Masukan Pencarian Disposisi" value="{{ old('seacrh') }}">
    </div>
    <div class="col-auto">
        <input type="submit" value="Cari" class="btn btn-primary mb-3">
        <a href="{{route('kategori.create')}}" class="btn btn-secondary mb-3"><i class="fas fa-plus"></i>Tambah Data</a>
    </div>
</form>

@php
$i=1;
@endphp
<table class="table table-sm table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $item)
        <tr>
            <th scope="col">{{$i++}}</th>
            <th scope="col">{{$item->name_category}}</th>
            <th scope="col">
                <a href="{{route('kategori.edit',$item->id)}}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                </a>
                <form action="{{route('kategori.destroy',$item->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
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
