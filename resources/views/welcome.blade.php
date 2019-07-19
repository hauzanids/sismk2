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
        </div>
      </div>  
    </div>
  </div>
@endsection