@extends('layouts/admin')
 
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Laporan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Laporan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Form untuk filter laporan -->
  <form class="row g-3">
    <div class="col-md-4">
      <label for="tahun" class="form-label">Tahun</label>
      <input type="number" class="form-control" id="tahun" placeholder="Masukkan tahun">
    </div>
    <div class="col-md-4">
      <label for="bulan" class="form-label">Bulan</label>
      <select id="bulan" class="form-select">
        <option selected>Pilih bulan</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>
    </div>
    <div class="col-md-4 d-flex align-items-end">
      <button type="submit" class="btn btn-primary">Cari</button>
    </div>
  </form>

  <!-- Tombol untuk Cetak dan Unduh -->
  <div class="d-flex justify-content-end mt-3">
    <button class="btn btn-success me-2">Cetak</button>
    <button class="btn btn-info">Unduh</button>
  </div>

  <!-- Tabel Laporan -->
  <table class="table mt-4">
    <thead>
      <tr>
        <th>No.</th>
        <th>No.Kode</th>
        <th>Nama Project</th>
        <th>Type</th>
        <th>Tenggat Waktu</th>
        <th>Pengaju</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>P001</td>
        <td>Project A</td>
        <td>Type A</td>
        <td>2024-12-31</td>
        <td>John Doe</td>
        <td>Diterima</td>
      </tr>
      <tr>
        <td>2</td>
        <td>P002</td>
        <td>Project B</td>
        <td>Type B</td>
        <td>2024-11-15</td>
        <td>Jane Smith</td>
        <td>Diterima</td>
      </tr>
      <!-- Tambahkan data lain sesuai kebutuhan -->
    </tbody>
  </table>




</main>
@endsection