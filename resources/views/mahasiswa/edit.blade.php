@extends('layouts.master')

@section('title')
    Tambah Data Mahasiswa
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('mahasiswa/'.$mhs->id.'/update') }}" method="post"> @csrf @method("PUT")
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input value="{{ $mhs->nim }}" required type="text" class="form-control" id="nim" name="nim">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input value="{{ $mhs->nama }}" required type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input value="{{ $mhs->jurusan }}" required type="text" class="form-control" id="jurusan" name="jurusan">
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input value="{{ $mhs->tgl_lahir }}" required type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea required name="alamat" class="form-control" id="alamat" rows="2">{{ $mhs->alamat }}</textarea>
                </div>
                <button type="submit" class="btn btn-warning">Ubah</button>
            </form>
        </div>
    </div>
@endsection