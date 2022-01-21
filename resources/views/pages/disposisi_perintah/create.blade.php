@extends('layout.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Disposisi</h1>
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
    <form class="card-body " action="{{route('disposisi.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Masukan Prihal</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukan Prihal" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Masukan Isi Perintah</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
                placeholder="masukan Keterangn" type="text"></textarea>
        </div>
        <div class="form-group">
            <label for="letter_maker">Di Tujukan Kepada</label>
            <input type="text" class="form-control" id="letter_maker" name="letter_maker" placeholder="Surat kepada ?"
                required>
        </div>
        <input type="submit" value="Simpan" class="btn btn-primary" name="submit">
    </form>
</div>
@endsection
