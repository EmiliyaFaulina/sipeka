@extends('layouts/admin')

@section('content')
<style>
</style>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Pengajuan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Pengajuan</a></li>
        <li class="breadcrumb-item active">Chat</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <!-- Table with stripped rows -->
        <table class="table datatable">
          <thead>
            <tr>
              <th>No. Kode</th>
              <th>Pengaju</th>
              <th>Tanggal</th>
              <th>Nama Project</th>
              <th>Jenis Platform</th>
              <th>Tenggat Waktu</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>001</td>
              <td>Unity Pugh</td>
              <td>2024-10-01</td>
              <td>Project A</td>
              <td>Web</td>
              <td>2024-10-30</td>
              <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal001">Detail</button></td>
            </tr>
            <tr>
              <td>002</td>
              <td>Theodore Duran</td>
              <td>2024-10-05</td>
              <td>Project B</td>
              <td>Mobile</td>
              <td>2024-11-15</td>
              <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal002">Detail</button></td>
            </tr>
            <tr>
              <td>003</td>
              <td>Kylie Bishop</td>
              <td>2024-10-10</td>
              <td>Project C</td>
              <td>Desktop</td>
              <td>2024-12-01</td>
              <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal003">Detail</button></td>
            </tr>
            <tr>
              <td>004</td>
              <td>Zelenia Roman</td>
              <td>2024-10-12</td>
              <td>Project D</td>
              <td>Web</td>
              <td>2024-11-30</td>
              <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal004">Detail</button></td>
            </tr>
          </tbody>
        </table>
        <!-- End Table with stripped rows -->

      </div>
    </div>

  </section>

  <!-- Modal Project: Sistem Pelayanan Kominfo-->
  <div class="modal fade" id="detailModal001" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <img src="{{ asset('')}}assets3/img/pengguna.jpeg" alt="Foto Pengguna" class="rounded-circle" width="50">
            <div class="ms-2">
              <h6 class="mb-0">Unity Pugh</h6>
              <small>Nama Project : Project A</small>
            </div>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Apakah Anda ingin menerima atau menolak pengajuan ini?</h5>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <!-- Accept button -->
          <button class="btn btn-success" id="acceptButton">Terima Pengajuan</button>
          <!-- Reject button -->
          <button class="btn btn-danger" id="rejectButton">Tolak Pengajuan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Project: Project B -->
  <div class="modal fade" id="detailModal002" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <img src="{{ asset('')}}assets3/img/pengguna.jpeg" alt="Foto Pengguna" class="rounded-circle" width="50">
            <div class="ms-2">
              <h6 class="mb-0">Theodore Duran</h6>
              <small>Nama Project : Project B</small>
            </div>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Apakah Anda ingin menerima atau menolak pengajuan ini?</h5>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <!-- Accept button -->
          <button class="btn btn-success" id="acceptButton2">Terima Pengajuan</button>
          <!-- Reject button -->
          <button class="btn btn-danger" id="rejectButton2">Tolak Pengajuan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Project: Project C -->
  <div class="modal fade" id="detailModal003" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <img src="{{ asset('')}}assets3/img/pengguna.jpeg" alt="Foto Pengguna" class="rounded-circle" width="50">
            <div class="ms-2">
              <h6 class="mb-0">Kylie Bishop</h6>
              <small>Nama Project : Project C</small>
            </div>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Apakah Anda ingin menerima atau menolak pengajuan ini?</h5>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <!-- Accept button -->
          <button class="btn btn-success" id="acceptButton3">Terima Pengajuan</button>
          <!-- Reject button -->
          <button class="btn btn-danger" id="rejectButton3">Tolak Pengajuan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Project: Project D -->
  <div class="modal fade" id="detailModal004" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <img src="{{ asset('')}}assets3/img/pengguna.jpeg" alt="Foto Pengguna" class="rounded-circle" width="50">
            <div class="ms-2">
              <h6 class="mb-0">Zelenia Roman</h6>
              <small>Nama Project : Project D</small>
            </div>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Apakah Anda ingin menerima atau menolak pengajuan ini?</h5>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <!-- Accept button -->
          <button class="btn btn-success" id="acceptButton4">Terima Pengajuan</button>
          <!-- Reject button -->
          <button class="btn btn-danger" id="rejectButton4">Tolak Pengajuan</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Accept button action for Project A
      document.getElementById('acceptButton').addEventListener('click', function () {
        alert('Pengajuan diterima!');
        var modal = bootstrap.Modal.getInstance(document.getElementById('detailModal001'));
        modal.hide();
      });

      // Reject button action for Project A
      document.getElementById('rejectButton').addEventListener('click', function () {
        alert('Pengajuan ditolak!');
        var modal = bootstrap.Modal.getInstance(document.getElementById('detailModal001'));
        modal
        
     @endsection 