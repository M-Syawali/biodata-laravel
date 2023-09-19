@extends('adminlte')
@section('content')
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Guru Dashboard Page</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Guru Dashboard</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
    
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Guru Dashboard</h3>
            </div>
            <div class="card-body">
              @if($message = Session::get('success'))
              <div class="alert alert-success">{{ $message}} </div>
              @endif
              <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah Data </a>
              <br><br>
            <table class="table table-striped table-bordered">
               <tr>

                <th>No</th>
                <th>Nip</th>
                <th>Nama Guru</th>
                <th>Mapel</th>
                <th>Aksi</th>
              </tr>
              @foreach($GuruM as $guru)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$guru->nip}}</td>
                <td>{{$guru->namaguru}}</td>
                <td>{{$guru->mapel}}</td>
                <td>
                  <a href=""
                  class="btn btn-warning">Edit</a> -
                  <form action="" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                </td>
              </tr>
              @endforeach
            </table>
            </div>
          </div>
        </section>
@endsection