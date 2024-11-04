@extends('layouts/admin')
 
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Project</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
        <li class="breadcrumb-item">Agenda</li>
        <li class="breadcrumb-item active">Project</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

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
      <div class="row">
        <!-- Tahap Perencanaan -->
        <div class="col-6">
          <h6>A. Tahap Perencanaan</h6>
          <ul class="list-unstyled">
            <li><input type="checkbox" disabled id="identifikasiView"> Identifikasi Kebutuhan</li>
            <li><input type="checkbox" disabled id="analisisView"> Analisis Pengguna</li>
            <li><input type="checkbox" disabled id="teknologiView"> Penentuan Teknologi</li>
            <li><input type="checkbox" disabled id="wireframeView"> Membuat Wireframe</li>
          </ul>
        </div>
        <!-- Tahap Desain -->
        <div class="col-6">
          <h6>B. Tahap Desain</h6>
          <ul class="list-unstyled">
            <li><input type="checkbox" disabled id="antarmukaView"> Desain Antarmuka Pengguna</li>
            <li><input type="checkbox" disabled id="pengalamanView"> Desain Pengalaman Pengguna</li>
            <li><input type="checkbox" disabled id="validasiView"> Revisi dan Validasi Desain</li>
            <li><input type="checkbox" disabled> ...</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="modal-footer d-flex justify-content-between">
      <button class="btn btn-primary" id="updateProgressButton">Update Progres</button>
      <div class="d-flex">
        <button class="btn btn-outline-primary me-2" id="bagikan">Bagikan (PDF)</button>
        <button class="btn btn-outline-primary me-2" id="unduh">Unduh (PDF)</button>
        <button class="btn btn-outline-primary" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal untuk Update Progres -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="updateModalLabel">Update Progres Project</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6>A. Tahap Perencanaan</h6>
      <ul class="list-unstyled">
        <li><input type="checkbox" id="checkIdentifikasi"> Identifikasi Kebutuhan</li>
        <li><input type="checkbox" id="checkAnalisis"> Analisis Pengguna</li>
        <li><input type="checkbox" id="checkTeknologi"> Penentuan Teknologi</li>
        <li><input type="checkbox" id="checkWireframe"> Membuat Wireframe</li>
      </ul>
      <h6>B. Tahap Desain</h6>
      <ul class="list-unstyled">
        <li><input type="checkbox" id="checkAntarmuka"> Desain Antarmuka Pengguna</li>
        <li><input type="checkbox" id="checkPengalaman"> Desain Pengalaman Pengguna</li>
        <li><input type="checkbox" id="checkValidasi"> Revisi dan Validasi Desain</li>
      </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="saveProgres">Simpan Progres</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {

    // Fungsi untuk membuka modal Update Progres
    document.getElementById('updateProgressButton').addEventListener('click', function () {
      var updateModal = new bootstrap.Modal(document.getElementById('updateModal'));
      updateModal.show();
    });

    // Fungsi Simpan Progres
    document.getElementById('saveProgres').addEventListener('click', function () {
      // Lakukan logika penyimpanan progres di sini, misalnya dengan AJAX
      alert('Progres berhasil disimpan!');
      var updateModal = bootstrap.Modal.getInstance(document.getElementById('updateModal'));
      updateModal.hide();
    });

    // Fungsi Bagikan sebagai PDF
    document.getElementById('bagikan').addEventListener('click', function () {
      generatePDF("Bagikan_Project_Detail.pdf");
    });

    // Fungsi Unduh sebagai PDF
    document.getElementById('unduh').addEventListener('click', function () {
      generatePDF("Unduh_Project_Detail.pdf");
    });

    // Fungsi untuk Simpan Progres
    document.getElementById('simpan').addEventListener('click', function () {
      alert('Data disimpan!');
      // Anda bisa menambahkan fungsi penyimpanan ke server di sini
    });

    // Fungsi untuk menghasilkan PDF
    function generatePDF(filename) {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();

      doc.text("Detail Project", 10, 10);
      doc.text("Nama Project : Project A", 10, 20);
      doc.text("Pengaju : Unity Pugh", 10, 30);

      doc.text("Tahap Perencanaan:", 10, 40);
      doc.text("- Identifikasi Kebutuhan", 10, 50);
      doc.text("- Analisis Pengguna", 10, 60);
      doc.text("- Penentuan Teknologi", 10, 70);
      doc.text("- Membuat Wireframe", 10, 80);

      doc.text("Tahap Desain:", 10, 90);
      doc.text("- Desain Antarmuka Pengguna", 10, 100);
      doc.text("- Desain Pengalaman Pengguna", 10, 110);
      doc.text("- Revisi dan Validasi Desain", 10, 120);

      doc.save(filename);
    }
  });
</script>

  </div>
</div>
</div>




@endsection 