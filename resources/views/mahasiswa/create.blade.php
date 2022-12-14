@extends('layouts.master')

@section('title')
    Tambah Data Mahasiswa
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('mahasiswa/store') }}" method="post"> @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input required type="text" class="form-control" id="nim" name="nim">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input required type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input required type="text" class="form-control" id="jurusan" name="jurusan">
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input required type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea required name="alamat" class="form-control" id="alamat" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
@endsection