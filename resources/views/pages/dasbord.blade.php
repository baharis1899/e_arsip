@extends('layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
            <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$masuk}}</h3>
                <p>Surat Masuk</p>
              </div>  
              <div class="icon">
<i class="fas fa-envelope-open-text"></i>
              </div>
              
            </div>
            
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$keluar}}</h3>
                <p>Surat Keluar</p>
              </div>
              <div class="icon">
<i class="fas fa-envelope-square"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$disposisi}}</h3>
                <p>Disposisi</p>
              </div>
              <div class="icon">
<i class="fas fa-terminal"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>

                <div class="row container">
                    
                </div>

@endsection
@push('addom-script')
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
@endpush