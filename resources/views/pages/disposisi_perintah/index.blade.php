@extends('layout.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Disposisi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item "><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Disposisi</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<form class="mt-4 row g-3" action="disposisi" method="get">
    @csrf
    <div class="col-auto">
        <input style="width: 400px" type="text" class="form-control" id="seacrh" name="seacrh"
            placeholder="Masukan Pencarian Disposisi" value="{{ old('seacrh') }}">
    </div>
    <div class="col-auto">
        <input type="submit" value="Cari" class="btn btn-primary mb-3">
        <a href="{{route('disposisi.create')}}" class="btn btn-secondary mb-3"><i class="fas fa-plus"></i>Tambah
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
            <th scope="col">Prihal</th>
            <th scope="col">Isi Disposisi</th>
            <th scope="col">Disposisi Kepada</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>

        @forelse($data as $item)
        <tr>
            <th scope="col">{{$i++}}</th>
            <th scope="col">{{$item->title}}</th>
            <th scope="col">{{$item->description}}</th>
            <th scope="col">{{$item->letter_maker}}</th>
            <th scope="col">
                <a href="{{route('disposisi.edit',$item->id)}}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                </a>

                <a href="/printPdf/{{$item->id}}" class="btn btn-info">
                    <i class="fa fa-export"></i>
                </a>

                <form action="{{route('disposisi.destroy',$item->id)}}" method="post" class="d-inline">
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
@push('addom-script')
<script>
    $.widget.bridge('uibutton', $.ui.button)

</script>
@endpush
