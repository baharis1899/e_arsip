@extends('layout.admin')
@section('content')
    <form class="mt-4 row g-3" action="" method="get">
    @csrf
    <div class="col-auto">
        <input style="width: 400px" type="text" class="form-control" id="seacrh" name="seacrh"
            placeholder="Masukan Pencarian Nama Murid" value="{{ old('seacrh') }}">
    </div>
    <div class="col-auto">
        <input type="submit" value="Cari" class="btn btn-primary mb-3">
        <a href="" class="btn btn-secondary mb-3"><i class="fas fa-plus"></i>Tambah Data</a>
    </div>
</form>
<table class="table table-sm table-dark">
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
@endsection