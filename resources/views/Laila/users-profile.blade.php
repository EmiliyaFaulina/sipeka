@extends('layouts/admin')
 
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{ asset('')}}assets2/img/laila.png" alt="Profile" class="rounded-circle">
            <h2>Laila</h2>
            <h3>Web Designer</h3>
          
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
          <!-- Bordered Tabs -->
<ul class="nav nav-tabs nav-tabs-bordered">

<li class="nav-item">
  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Detail Profil</button>
</li>

<li class="nav-item">
  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
</li>

</ul>

<div class="tab-content pt-2">

<!-- Profile Overview -->
<div class="tab-pane fade show active" id="profile-overview">
  <h5 class="card-title">Profile Details</h5>

  <div class="row">
    <div class="col-lg-3 col-md-4 label">Nama</div>
    <div class="col-lg-9 col-md-8">Laila</div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-4 label">Bidang</div>
    <div class="col-lg-9 col-md-8">Sekretariat</div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-4 label">Alamat</div>
    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-4 label">Telepon</div>
    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-4 label">Email</div>
    <div class="col-lg-9 col-md-8">ylala@gmail.com</div>
  </div>
</div>
<!-- End Profile Overview -->

<!-- Profile Edit -->
<div class="tab-pane fade profile-edit pt-3" id="profile-edit">

  <!-- Profile Edit Form -->
<form id="profileEditForm">
  <div class="row mb-3">
    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
    <div class="col-md-8 col-lg-9">
      <img src="{{ asset('')}}assets2/img/laila.png" alt="Profile">
      <div class="pt-2">
        <input type="file" id="uploadProfileImage" style="display: none;" accept="image/*">
        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image" onclick="uploadImage()">
            <i class="bi bi-upload"></i>
        </a>
        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image" onclick="removeImage()">
            <i class="bi bi-trash"></i>
        </a>
    </div>
    
    <script>
        function uploadImage() {
            document.getElementById('uploadProfileImage').click();
            document.getElementById('uploadProfileImage').onchange = function() {
                // Lakukan aksi upload ke server di sini
                alert("Image is ready for upload!");
            };
        }

        function removeImage() {
            // Lakukan aksi penghapusan image di server di sini
            alert("Profile image has been removed!");
        }

        function saveChanges() {
            // Simulasikan pengiriman data ke server
            setTimeout(function() {
                alert("Berhasil disimpan!");
            }, 500); // jeda waktu agar terlihat alami
        }
    </script>
    
    </div>
  </div>

  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
    <div class="col-md-8 col-lg-9">
      <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Bidang</label>
    <div class="col-md-8 col-lg-9">
      <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
    <div class="col-md-8 col-lg-9">
      <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telepon</label>
    <div class="col-md-8 col-lg-9">
      <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
    <div class="col-md-8 col-lg-9">
      <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
    </div>
  </div>

  <div class="text-center">
    <button type="button" class="btn btn-primary" onclick="saveChanges()">Save Changes</button>
  </div>
  
</form>
<!-- End Profile Edit Form -->


</div>
<!-- End Profile Edit -->

</div><!-- End Bordered Tabs -->



        </div>
      </div>
    </section>

  </main>

@endsection
 
 