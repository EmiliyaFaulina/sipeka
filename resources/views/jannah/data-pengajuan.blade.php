@extends('layouts/app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <table class="table table-striped table-bordered" id="myTable">
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
    </div>
</div>
  @endsection
