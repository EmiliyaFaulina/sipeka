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
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
          <div class="container">
          <div class="row clearfix">
              <div class="col-lg-12">
                  <div class="card chat-app">
                      <div id="plist" class="people-list">
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fa fa-search"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Search...">
                          </div>
                          <ul class="list-unstyled chat-list mt-2 mb-0">
                              <li class="clearfix" onclick="openChat('Vincent Porter', 'left 7 mins ago', 'https://bootdey.com/img/Content/avatar/avatar1.png')">
                                  <img src="{{ asset ('')}}assets3/img/pengguna.jpeg" alt="avatar">
                                  <div class="about">
                                      <div class="name">Vincent Porter</div>
                                      <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                                  </div>
                              </li>
                              <li class="clearfix active" onclick="openChat('Aiden Chavez', 'online', 'https://bootdey.com/img/Content/avatar/avatar2.png')">
                                  <img src="{{ asset ('')}}assets4/img/messages-2.jpg" alt="avatar">
                                  <div class="about">
                                      <div class="name">Aiden Chavez</div>
                                      <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                  </div>
                              </li>
                              <!-- Tambahkan kontak lainnya sesuai kebutuhan -->
                          </ul>
                      </div>
                      <div class="chat">
                          <div class="chat-header clearfix">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                      </a>
                                      <div class="chat-about">
                                          <h6 class="m-b-0" id="chatName">Aiden Chavez</h6>
                                          <small id="chatStatus">Last seen: 2 hours ago</small>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 hidden-sm text-right">
                                      <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                                      <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                      <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                                      <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                                  </div>
                              </div>
                          </div>
                          {{-- <div class="chat-history" id="chatHistory">
                              <ul class="m-b-0">
                                  <!-- Riwayat pesan ditampilkan di sini -->
                              </ul>
                          </div>
                          <div class="chat-message clearfix">
                              <div class="input-group mb-0">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fa fa-send"></i></span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Enter text here...">                                    
                              </div>
                          </div> --}}
                      </div>
                  </div>
              </div>
          </div>
          </div>
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