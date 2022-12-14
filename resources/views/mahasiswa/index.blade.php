@extends('layouts.master')

@section('title')
    Mahasiswa
@endsection

@section('content')
    <a href="{{ url('mahasiswa/create') }}" class="btn btn-success">Tambah Data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Menu</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mahasiswa as $data)
          <tr>
            <th scope="row">{{ $data->nim }}</th>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jurusan }}</td>
            <td>{{ $data->tgl_lahir }}</td>
            <td>{{ $data->alamat }}</td>
            <td>
                <a href="{{ url('mahasiswa/'.$data->id.'/edit') }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('mahasiswa/'.$data->id.'/hapus') }}" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection