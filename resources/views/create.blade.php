@extends('layouts.default')

@section('content')
  <section>
    <div class="container mt-5">
      <h1>Tambah Mahasiswa</h1>
      <div class="row">
        <div class="col-lg-8">
          <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama">Nama Mahasiswa *</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
            </div>

            <div class="form-group mt-2">
              <label for="nama">NIM *</label>
              <input type="number" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa">
            </div>

            <div class="form-group mt-2">
              <label for="nama">Alamat *</label>
              <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
            </div>

            <div class="form-group mt-3">
              <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
            </div>

            <div class="form-group mt-2">
              <a class="btn btn-danger" style="text-decoration: none" href="{{ url('/') }}">
                << Kembali ke halaman mahasiswa
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection