@extends('layouts.app')
@section('content')
<?php $daftar_informasi = \App\Informasi::all(); ?>
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        @if(session('success'))
          <div class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
        @endif
        <h1 class="text-center"> Daftar Informasi SMK 2</h1>
        <div class="row">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Judul</th>
                <th scope="col">Gambar</th>
                <th scope="col">Deksripsi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($daftar_informasi as $informasi)
              <tr>
                <td>{{$informasi->judul}}</td>
                <td><img src="{{ URL::to('/') }}/img/{{ $informasi->gambar }}" class="img-thumbnail" width="75"></td>
                <td>{!!$informasi->deskripsi!!}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Informasi
          </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Informasi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="text" class="form-control" name="judul" placeholder="Masukan judul informasi">
                    </div>

                    <div class="form-group">
                      <label for="gambar">Gambar</label>
                      <input type="file" class="form-control" name="gambar">
                    </div>

                    <div class="form-group">
                      <label for="Deksripsi">Deskripsi Lomba</label>
                      <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukan deskripsi informasi"></textarea>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                  </form>
                </div>     
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
@endsection