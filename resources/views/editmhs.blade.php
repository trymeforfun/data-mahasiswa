@extends('master')
@section('title', 'Edit Mahasiswa')
    @section('konten')
    @foreach ($mahasiswa as $mhs)
    
  <div class="row">
    <div class="col-md-6">
    <form action="/mahasiswa/updateMhs" method="POST">
      {{ @csrf_field() }}
      <div class="form-group">
        <input type="hidden" name="id" value="{{ $mhs->id }}">  
        <label for="">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $mhs->nama }}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">NIM</label>
        <input type="nim" class="form-control" id="nim" name="nim" value="{{ $mhs->nim }}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $mhs->email }}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  </div>
    @endforeach
    
@endsection