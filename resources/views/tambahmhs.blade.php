@extends('master')
@section('title', 'Tambah Mahasiswa')
    @section('konten')
    <div class="row">
      <div class="col-md-6">
    <form action="/mahasiswa/cekMhs" method="POST">
        {{ @csrf_field() }}
        <div class="form-group">
          <label for="">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama" id="nama" name="nama" value="{{ old('nama') }}">
          @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">NIM</label>
          <input type="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="masukkan nim" id="nim" name="nim" value="{{ old('nim') }}">
          @error('nim')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="masukkan email" id="email" name="email" value="{{ old('email') }}">
          @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
    
@endsection