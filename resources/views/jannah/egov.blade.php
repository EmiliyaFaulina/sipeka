@extends('layouts/app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Chat e-Gov</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
{{-- <style>
        body{
        background-color: #ffffff;
        margin-top:20px;
    }
    .card {
        background: #b8c8eb;
        transition: .5s;
        border: 0;
        margin-bottom: 30px;
        border-radius: .55rem;
        position: relative;
        width: 100%;
        box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
    }
    .chat-app .people-list {
        width: 280px;
        position: absolute;
        left: 0;
        top: 0;
        padding: 20px;
        z-index: 7
    }

    .chat-app .chat {
        margin-left: 280px;
        border-left: 1px solid #eaeaea
    }

    .people-list {
        -moz-transition: .5s;
        -o-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s
    }

    .people-list .chat-list li {
        padding: 10px 15px;
        list-style: none;
        border-radius: 3px
    }

    .people-list .chat-list li:hover {
        background: #efefef;
        cursor: pointer
    }

    .people-list .chat-list li.active {
        background: #efefef
    }

    .people-list .chat-list li .name {
        font-size: 15px
    }

    .people-list .chat-list img {
        width: 45px;
        border-radius: 50%
    }

    .people-list img {
        float: left;
        border-radius: 50%
    }

    .people-list .about {
        float: left;
        padding-left: 8px
    }

    .people-list .status {
        color: #999;
        font-size: 13px
    }

    .chat .chat-header {
        padding: 15px 20px;
        border-bottom: 2px solid #f4f7f6
    }

    .chat .chat-header img {
        float: left;
        border-radius: 40px;
        width: 40px
    }

    .chat .chat-header .chat-about {
        float: left;
        padding-left: 10px
    }

    .chat .chat-history {
        padding: 20px;
        border-bottom: 2px solid #fff
    }

    .chat .chat-history ul {
        padding: 0
    }

    .chat .chat-history ul li {
        list-style: none;
        margin-bottom: 30px
    }

    .chat .chat-history ul li:last-child {
        margin-bottom: 0px
    }

    .chat .chat-history .message-data {
        margin-bottom: 15px
    }

    .chat .chat-history .message-data img {
        border-radius: 40px;
        width: 40px
    }

    .chat .chat-history .message-data-time {
        color: #434651;
        padding-left: 6px
    }

    .chat .chat-history .message {
        color: #444;
        padding: 18px 20px;
        line-height: 26px;
        font-size: 16px;
        border-radius: 7px;
        display: inline-block;
        position: relative
    }

    .chat .chat-history .message:after {
        bottom: 100%;
        left: 7%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-bottom-color: #fff;
        border-width: 10px;
        margin-left: -10px
    }

    .chat .chat-history .my-message {
        background: #efefef
    }

    .chat .chat-history .my-message:after {
        bottom: 100%;
        left: 30px;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-bottom-color: #efefef;
        border-width: 10px;
        margin-left: -10px
    }

    .chat .chat-history .other-message {
        background: #e8f1f3;
        text-align: right
    }

    .chat .chat-history .other-message:after {
        border-bottom-color: #e8f1f3;
        left: 93%
    }

    .chat .chat-message {
        padding: 20px
    }

    .online,
    .offline,
    .me {
        margin-right: 2px;
        font-size: 8px;
        vertical-align: middle
    }

    .online {
        color: #86c541
    }

    .offline {
        color: #e47297
    }

    .me {
        color: #1d8ecd
    }

    .float-right {
        float: right
    }

    .clearfix:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0
    }

    @media only screen and (max-width: 767px) {
        .chat-app .people-list {
            height: 465px;
            width: 100%;
            overflow-x: auto;
            background: #fff;
            left: -400px;
            display: none
        }
        .chat-app .people-list.open {
            left: 0
        }
        .chat-app .chat {
            margin: 0
        }
        .chat-app .chat .chat-header {
            border-radius: 0.55rem 0.55rem 0 0
        }
        .chat-app .chat-history {
            height: 300px;
            overflow-x: auto
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 992px) {
        .chat-app .chat-list {
            height: 650px;
            overflow-x: auto
        }
        .chat-app .chat-history {
            height: 600px;
            overflow-x: auto
        }
    }

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
        .chat-app .chat-list {
            height: 480px;
            overflow-x: auto
        }
        .chat-app .chat-history {
            height: calc(100vh - 350px);
            overflow-x: auto
        }
    }

</style> --}}
<main id="main" class="main">
    <div class="container">
        <div class=" text-center mt-5 ">

            <h1>Buat Laporan Pengajuan</h1>


        </div>


        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    @if (Session::has('success'))
                        <span class="alert bg-success w-100 text-white">{{ Session::get('success') }}</span>
                    @elseif(Session::has('failed'))
                        <span class="alert bg-danger w-100 text-white">{{ Session::get('failed') }}</span>
                    @endif
                    
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" class="row g-3 needs-validation" novalidate method="POST" action="{{route('pengajuanAksi')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user" value="{{session('id')}}">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Nama *</label>
                                                    <input id="form_name" type="text" name="id"
                                                        value="{{session('username')}}" disabled class="form-control"
                                                        placeholder="Please enter your firstname *" required="required"
                                                        data-error="Firstname is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Judul_Pengajuan *</label>
                                                    <input type="text" name="judul_pengajuan" class="form-control"
                                                        placeholder="Please judul pengajuan *" required="required"
                                                        data-error="Valid email is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Email *</label>
                                                    <input id="form_email" type="email" name="Email"
                                                        value="{{session('email')}}" disabled class="form-control"
                                                        placeholder="Please enter your lastname *" required="required"
                                                        data-error="Lastname is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6 hidden-sm text-right my-3">
                                                <label for="form_email">Upload Dokumen *</label>
                                                <!-- Tombol Unggah Dokumen -->
                                                <a href="javascript:void(0);" name="foto" class="btn btn-outline-secondary ms-2"
                                                    onclick="triggerDocumentUpload()"><i class="fa fa-upload"></i>
                                                    Upload Dokumen</a>

                                                <!-- Input File untuk Unggah Dokumen -->
                                                <input type="file" name="foto" id="documentUpload"
                                                    accept=".pdf" style="display: none;"
                                                    onchange="handleDocumentUpload(event)">

                                                <div class="chat-history mt-2" id="chatHistory">
                                                    <ul class="m-b-0">
                                                        <!-- Riwayat pesan ditampilkan di sini -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- <div class="form-group">
                                                    <label for="form_message">Message *</label>
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                                        >
                                                    </div>

                                                </div> --}}
                                                <div class="col-md-12">

                                                    <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Kirim Pengajuan</button>
                                                    {{-- <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                                                        " value="Kirim Pengajuan"> --}}

                                                </div>

                                            </div>


                                        </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.8 -->

            </div>
            <!-- /.row-->

        </div>
    </div>

    <script>
        // Memicu unggahan dokumen
        function triggerDocumentUpload() {
            document.getElementById('documentUpload').click();
        }

        // Menangani proses unggah dokumen
        function handleDocumentUpload(event) {
            const file = event.target.files[0];
            if (file) {
                const chatHistory = document.getElementById('chatHistory').querySelector('ul');
                const li = document.createElement('li');
                li.classList.add('document-item', 'text-right'); // Tambahkan kelas untuk styling dan posisi
                li.innerHTML = `
                <span name="foto">Dokumen diunggah: ${file.name}</span>
                <button class="btn btn-danger btn-sm ml-2" onclick="deleteDocument(this)">Hapus</button>
            `;
                chatHistory.appendChild(li);

            }
        }

        // Menghapus dokumen dari daftar dengan konfirmasi dan notifikasi
        function deleteDocument(button) {
            if (confirm("Anda yakin ingin menghapus dokumen ini?")) {
                const listItem = button.parentElement;
                listItem.remove();
                showNotification("Dokumen berhasil dihapus");
            }
        }

    </script>


    {{-- <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
          <div class="container">
          <div class="row clearfix">
              <div class="col-lg-12">
                  <div class="card chat-app">
                      <div id="plist" >
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  
                              </div>
                              
                          </div>
                          
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
                                    <!-- Tombol Unggah Dokumen -->
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary" onclick="triggerDocumentUpload()"><i class="fa fa-upload"></i> Upload Dokumen</a>
                    
                                    <!-- Input File untuk Unggah Dokumen -->
                                    <input type="file" id="documentUpload" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleDocumentUpload(event)">
                                </div>
                            </div>
                        </div>
                        <div class="chat-history" id="chatHistory">
                            <ul class="m-b-0">
                                <!-- Riwayat pesan ditampilkan di sini -->
                            </ul>
                        </div>
                        <div class="chat-message clearfix">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter text here..." onkeypress="sendMessage(event)">                                    
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" onclick="sendMessageButton()">
                                        <i class="fa fa-paper-plane"></i> <!-- Ikon kirim pesan -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Elemen Notifikasi -->
                    <div id="notification" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #28a745; color: white; padding: 10px; border-radius: 5px;">
                        Dokumen berhasil dihapus
                    </div>
                    
                    <!-- Tambahkan JavaScript -->
                    <script>
                        // Memicu unggahan dokumen
                        function triggerDocumentUpload() {
                            document.getElementById('documentUpload').click();
                        }
                    
                        // Menangani proses unggah dokumen
                        function handleDocumentUpload(event) {
                            const file = event.target.files[0];
                            if (file) {
                                const chatHistory = document.getElementById('chatHistory').querySelector('ul');
                                const li = document.createElement('li');
                                li.classList.add('document-item', 'text-right'); // Tambahkan kelas untuk styling dan posisi
                                li.innerHTML = `
                                    <span>Dokumen diunggah: ${file.name}</span>
                                    <button class="btn btn-danger btn-sm ml-2" onclick="deleteDocument(this)">Hapus</button>
                                `;
                                chatHistory.appendChild(li);
                                
                                // Reset input untuk memungkinkan pengunggahan ulang file yang sama
                                event.target.value = '';
                            }
                        }
                    
                        // Mengirim pesan saat menekan tombol Enter
                        function sendMessage(event) {
                            if (event.key === 'Enter') {
                                sendMessageContent();
                            }
                        }
                    
                        // Mengirim pesan saat tombol kirim diklik
                        function sendMessageButton() {
                            sendMessageContent();
                        }
                    
                        // Fungsi untuk mengirim pesan
                        function sendMessageContent() {
                            const input = document.querySelector('.chat-message input');
                            const message = input.value.trim();
                            if (message) {
                                const chatHistory = document.getElementById('chatHistory').querySelector('ul');
                                const li = document.createElement('li');
                                li.classList.add('chat-message', 'text-right'); // Tambahkan kelas untuk styling dan posisi
                                li.innerHTML = `
                                    <span>${message}</span>
                                `;
                                chatHistory.appendChild(li);
                                input.value = ''; // Reset input setelah mengirim pesan
                            }
                        }
                    
                        // Menghapus dokumen dari daftar dengan konfirmasi dan notifikasi
                        function deleteDocument(button) {
                            if (confirm("Anda yakin ingin menghapus dokumen ini?")) {
                                const listItem = button.parentElement;
                                listItem.remove();
                                showNotification("Dokumen berhasil dihapus");
                            }
                        }
                    
                        // Menampilkan notifikasi singkat di tengah layar
                        function showNotification(message) {
                            const notification = document.getElementById('notification');
                            notification.textContent = message;
                            notification.style.display = 'block';
                            
                            // Sembunyikan notifikasi setelah 3 detik
                            setTimeout(() => {
                                notification.style.display = 'none';
                            }, 3000);
                        }
                    </script>
                    
                    <style>
                        /* Tambahkan gaya untuk posisi dokumen dan pesan */
                        .document-item, .chat-message {
                            text-align: right; /* Menyusun teks ke kanan */
                            margin-bottom: 10px; /* Spasi antar item */
                        }
                    </style>
                    
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
    </div>
  </section> --}}
</main>

<script>
    function openChat(name, status, avatarUrl) {
        document.getElementById('chatName').textContent = name;
        document.getElementById('chatStatus').textContent = status;
        document.getElementById('chatAvatar').src = avatarUrl;

        // Kosongkan riwayat chat setiap kali pengguna baru dipilih
        const chatHistory = document.getElementById('chatHistory').querySelector('ul');
        chatHistory.innerHTML = ''; // Kosongkan riwayat chat lama
    }

</script>


@endsection
