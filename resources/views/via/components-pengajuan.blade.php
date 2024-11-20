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
              <th>Status</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pengajuan as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->userPengajuan->username }}</td>
              <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
              <td>Project A</td>
              <td>Web</td>
              <td>2024-10-30</td>
              <td>{{ $item->status }}</td>
              <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal-{{ $item->id_pengajuan }}">Detail</button></td>
            </tr>


            <!-- Modal Project: Sistem Pelayanan Kominfo-->
            <div class="modal fade" id="detailModal-{{ $item->id_pengajuan }}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('')}}assets3/img/pengguna.jpeg" alt="Foto Pengguna" class="rounded-circle" width="50">
                        <div class="ms-2">
                        <h6 class="mb-0">{{ $item->userPengajuan->username }}</h6>
                        <small>Nama Project : {{ $item->judul_pengajuan }}</small>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5>Apakah Anda ingin menerima atau menolak pengajuan ini?</h5>
                    </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <!-- Accept button -->
                            <a href="{{route('updatestatus', $item->id_pengajuan) }}?status=berhasil" class="btn btn-success" id="acceptButton4">Terima Pengajuan</a>

                            <!-- Reject button -->
                            <a href="{{route('updatestatus', $item->id_pengajuan) }}?status=ditolak" class="btn btn-danger" id="rejectButton4">Tolak Pengajuan</a>
                    </div>
                </div>
                </div>
            </div>


            @endforeach
          </tbody>
        </table>
        <!-- End Table with stripped rows -->


      </div>
    </div>

  </section>

     @endsection
