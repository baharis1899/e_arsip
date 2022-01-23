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

<div class="mt-5  card shadow">
    <form class="card-body " action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name"
                 required>
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                 required>
        </div>
        <div class="form-group">
            <label for="name">Role</label>
            <select name="role" id="" class="form-control">
                <option value="" selected disabled>Pilih 1</option>
                <option value="ADMIN" >Admin</option>
                <option value="USER" >User</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="name">Title</label>
            <select name="title" id="" class="form-control">
                <option value="" selected disabled>Pilih 1</option>
                <option value="HUMAS" >Humas</option>
            </select>
        </div>

        <input type="submit" value="Simpan" class="btn btn-primary" name="submit">
    </form>
</div>

@endsection
