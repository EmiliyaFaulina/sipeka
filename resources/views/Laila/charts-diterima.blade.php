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
<form class="row g-3" id="filterForm" onsubmit="return filterLaporan(event)">
  <div class="col-md-4">
    <label for="tahun" class="form-label">Tahun</label>
    <input type="number" class="form-control" id="tahun" placeholder="Masukkan tahun" required>
  </div>
  <div class="col-md-4">
    <label for="bulan" class="form-label">Bulan</label>
    <select id="bulan" class="form-select" required>
      <option selected disabled>Pilih bulan</option>
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

<!-- Tambahkan pustaka html2pdf.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<!-- Tombol untuk Cetak dan Unduh -->
<div class="d-flex justify-content-end mt-3">
  <button class="btn btn-success me-2" onclick="cetakTabel()">Cetak</button>
  <button class="btn btn-info" onclick="unduhPDF()">Unduh PDF</button>
</div>

<!-- Tabel Laporan -->
<table class="table mt-4" id="laporanTabel">
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
    <tr data-tanggal="2024-12-31">
      <td>1</td>
      <td>P001</td>
      <td>Project A</td>
      <td>Type A</td>
      <td>2024-12-31</td>
      <td>John Doe</td>
      <td>Diterima</td>
    </tr>
    <tr data-tanggal="2024-11-15">
      <td>2</td>
      <td>P002</td>
      <td>Project B</td>
      <td>Type B</td>
      <td>2024-11-15</td>
      <td>Jane Smith</td>
      <td>Diterima</td>
    </tr>
  </tbody>
</table>

<script>
function filterLaporan(event) {
  event.preventDefault(); // Mencegah form dari pengiriman default

  const tahun = document.getElementById("tahun").value;
  const bulan = document.getElementById("bulan").value;
  const tabel = document.getElementById("laporanTabel");
  const tbody = tabel.getElementsByTagName("tbody")[0];
  const rows = tbody.getElementsByTagName("tr");

  // Hapus semua baris yang ada
  for (let i = 0; i < rows.length; i++) {
    rows[i].style.display = "none"; // Sembunyikan semua baris
  }

  // Tampilkan baris yang cocok dengan tahun dan bulan yang dicari
  for (let i = 0; i < rows.length; i++) {
    const tanggal = rows[i].getAttribute("data-tanggal");
    const date = new Date(tanggal);
    
    // Periksa apakah tahun dan bulan sesuai
    if (date.getFullYear() == tahun && (date.getMonth() + 1) == bulan) {
      rows[i].style.display = ""; // Tampilkan baris yang cocok
    }
  }
}
</script>


<script>
  // Fungsi Cetak Tabel
  function cetakTabel() {
    window.print();
  }

  // Fungsi Unduh Tabel sebagai PDF
  function unduhPDF() {
    const element = document.getElementById('laporanTabel');
    const opt = {
      margin:       0.5,
      filename:     'laporan_project.pdf',
      image:        { type: 'jpeg', quality: 0.98 },
      html2canvas:  { scale: 2 },
      jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
    };

    html2pdf().set(opt).from(element).save();
  }
</script>

      <!-- Tambahkan data lain sesuai kebutuhan -->
    </tbody>
  </table>




</main>
@endsection