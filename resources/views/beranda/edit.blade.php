@extends('layouts.app')
@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <h1 class="text-center">Edit Daftar Informasi</h1>
      <div class="row">
      
        <form action="{{ route('informasi.update', $informasi->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')

          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukan judul informasi" value="{{$informasi->judul}}">
          </div>

          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar">
            <img src="{{ URL::to('/') }}/img/{{ $informasi->gambar }}" class="img-thumbnail" width="100" />
            <input type="hidden" name="hidden_gambar" value="{{ $informasi->gambar }}" />
          </div>

          <div class="form-group">
            <label for="Deksripsi">Deskripsi Informasi</label>
            <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukan deskripsi informasi">
            {{$informasi->deskripsi}}
            </textarea>
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
@endsection