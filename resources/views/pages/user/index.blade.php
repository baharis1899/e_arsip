@extends('layout.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item "><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">User</li>
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
        <a href="{{route('user.create')}}" class="btn btn-secondary mb-3"><i class="fas fa-plus"></i>Tambah Data</a>
    </div>
</form>

@php
$i=1;
@endphp
<table class="table table-sm table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama User</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Title</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($user as $item)
        <tr>
            <th scope="col">{{$i++}}</th>
            <th scope="col">{{$item->name}}</th>
            <th scope="col">{{$item->email}}</th>
            <th scope="col">{{$item->role}}</th>
            <th scope="col">{{$item->title}}</th>
            <th scope="col">
                <a href="{{route('user.edit',$item->id)}}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                </a>
                <a href="javascript:void(0)" class="btn btn-danger delete"
                    data-url="{{route('user.destroy', $item->id)}}" data-label="user">
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