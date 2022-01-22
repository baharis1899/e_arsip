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

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="mt-5  card shadow">
    <form class="card-body" action="{{route('suratkeluar.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="latter_code">Masukan Kode Surat</label>
            <input type="text" class="form-control" id="latter_code" name="latter_code" placeholder="Masukan kode surat"
                required>
        </div>
        <div class="form-group">
            <label for="title">Masukan Surat Judul</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukan Judul" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Masukan Isi Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
                placeholder="masukan Keterangn" type="text"></textarea>
        </div>
        <div class="form-group">
            <label for="regarding">Masukan Prihal</label>
            <input type="text" class="form-control" id="regarding" name="regarding" placeholder="Masukan Prihal"
                required>
        </div>
        <div class="form-group">
            <label for="category_id">Pilih Nama Kelas</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">pilih nama Kelas</option>
                @foreach($kategori as $data)
                <option value="{{$data->id}}">
                    {{$data->name_category}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="files">Masukan file</label>
            <input type="file" name="files" id="files" class="form-control">
        </div>
        <input type="submit" value="Simpan" class="btn btn-primary" name="submit">
    </form>
</div>

@endsection