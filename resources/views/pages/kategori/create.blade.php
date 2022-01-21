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
    <form class="card-body " action="{{route('kategori.store')}}" method="POST">
        @csrf
<div class="form-group">
    <label for="name_category">Masukan Nama Kategori</label>
    <input type="text" class="form-control" id="name_category" name="name_category"  placeholder="Masukan Nama Kategori" required>
</div>
<input type="submit" value="Simpan" class="btn btn-primary" name="submit">
</form>
</div>

@endsection