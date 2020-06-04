@extends('master')

@section('title', 'Mahasiswa')
@section('konten')
<h2>Daftar Mahasiswa</h2>
<a href="/mahasiswa/tambahmhs" class="btn btn-primary">Tambah Mahasiswa</a>


@if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
@endif
@if (session('info'))
    <div class="alert alert-danger mt-3">
        {{ session('info') }}
    </div>
@endif

<div class="row">
    <div class="col-md-6">
    <form action="/mahasiswa/cari" method="GET">
    <div class="input-group mb-3 mt-4">
    <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="cari" aria-describedby="button-addon2" value="{{ old('cari') }}">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari Mahasiswa</button>
        </div>
    </div>
    </form> 
    </div>
    </div>

<table border=2 class="table-striped mt-4">
    <thead class="thead-dark">
    <tr class="text-center">   
        <th>Id</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Email</th>
        <th>No. telp</th>
        <th>Jenis Kelamin</th>
        <th>Hadiah</th>
        <th>Aksi</th>
    </tr>
    </thead>
    
    
@foreach ($mahasiswa as $mhs)
        <tr>
        <td class="px-2 mx-auto">{{ $mhs->id }}</td>
        <td class="px-2 mx-auto">{{ $mhs->nama }}</td>
        <td class="px-2 mx-auto">{{ $mhs->nim }}</td>
        <td class="px-2 mx-auto">{{ $mhs->email }}</td>
        <td class="px-2 mx-auto">{{ $mhs->phone->phone_number }}</td>
        <td class="px-2 mx-auto">
            @foreach ($mhs->jenis_kelamin as $item)
            {{ $item->jenis_kelamin }}    
            @endforeach
        </td>
        <td class="px-2 mx-auto">
            <ul>
            @foreach ($mhs->hadiah as $item)
            <li>{{ $item->nama_hadiah }}</li>  
            @endforeach
            </ul>
        </td>
        <td class="px-2 mx-auto"><a href="/mahasiswa/editmhs/{{$mhs->id}}" class="badge badge-success">edit</a>
        <form action="/mahasiswa/{{$mhs->id}}" method="post" class="d-inline">
        @method('delete')    
        @csrf
        <button class="badge badge-danger">hapus</button>
        </form>
        </td>
        
        </tr>
        
@endforeach
</table>

<br>

{{ $mahasiswa->links() }}

@endsection