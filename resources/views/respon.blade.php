@extends('layouts.apps')

@section('content')

<div class="container">
<div class="card text-center">
  <div class="card-header">
    Data Responden
  </div>

  <div class="card-body">
    <h5 class="card-title center">Survei Kepuasan Masyarakat</h5>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nama Lengkap</span>
        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" aria-label="Username" aria-describedby="basic-addon1">
    </div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Pendidikan Terakhir</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>--Silahkan Pilih Pendidikan Terakhir Anda--</option>
    <option value="1">SD</option>
    <option value="2">SMP</option>
    <option value="3">SMA</option>
    <option value="4">D1</option>
    <option value="5">D2</option>
    <option value="6">D3</option>
    <option value="7">D4</option>
    <option value="8">S1</option>
    <option value="9">S2</option>
    <option value="10">S3</option>
  </select>
</div>

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>--Silahkan Pilih Jenis Kelamin Anda--</option>
    <option value="1">Laki-Laki</option>
    <option value="2">Perempuan</option>
  </select>
</div>

<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Pekerjaan</span>
        <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Anda" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Usia</span>
        <input type="text" class="form-control" placeholder="Masukkan Usia Anda" aria-label="Username" aria-describedby="basic-addon1">
</div>

<a href="survei" class="btn btn-primary left">Lanjutkan <i class="bi bi-chevron-double-right"></i></a>
  </div>
  <div class="card-footer text-center ">
    Pastikan Sudah Mengisi Data dengan Benar !!!
  </div>
</div>
</div>


@endsection