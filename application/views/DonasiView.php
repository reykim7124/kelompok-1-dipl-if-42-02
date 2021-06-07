<?php 
  if ($this->session->userdata('username') != TRUE || $this->session->userdata('role') != 'user') { 
    redirect(base_url()); 
  } else {
    $user = $this->session->userdata('user');
  }
?>

<div class="text-center">
  <h1>Kirim Donasi untuk</h1>
  <h2><?= $title ?></h2>
</div>
<div class="d-flex justify-content-center my-5">
  <i class="far fa-credit-card text-primary" style="font-size: 6rem;"></i>
</div>

<form action="<?= site_url('HalamanPetisiController/kirimDonasi') ?>" method="post">
  <input type="hidden" style="visibility: hidden;" value="<?= $data ?>" id="id_petisi" name="id_petisi">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <div class="mb-3">
          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" value="<?= $user['nama'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">No. Handphone</label>
          <input type="tel" class="form-control" id="no_hp" value="<?= $user['no_hp'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="jumlah_dana" class="form-label">Jumlah Donasi</label>
          <input type="number" class="form-control" name="jumlah_dana" id="jumlah_dana" required>
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3 container-fluid p-0">
          <div class="row g-0">
            <div class="col-auto">
              <label for="no_rekening" class="form-label">No. Rekening</label>
            </div>
            <div class="col-auto">
              <input type="text" class="form-control" id="no_rekening" value="<?= $user['no_rekening'] ?>" required>
            </div>
            <div class="col-auto d-flex align-items-center justify-content-center ms-2">
              <i class="fab fa-cc-visa" style="font-size: 2rem;"></i>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="nama_pemilik" class="form-label">Nama Pemilih Rekening</label>
          <input type="text" class="form-control" id="nama_pemilik" required value="<?= $user['nama'] ?>">
        </div>
        <div class="mb-3 d-flex">
          <a class="btn btn-primary me-2 ms-auto" href="<?= base_url('HalamanPetisiController/index/'.$data) ?>">Cancel</a>
          <input type="submit" class="btn btn-primary">
        </div>
      </div>
    </div>
  </div>
</form>