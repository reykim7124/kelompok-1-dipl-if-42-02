<?php if ($this->session->userdata('username') != TRUE || $this->session->userdata('role') != 'user') { redirect(base_url()); } ?>
<div class="mt-5">
  <h1 class="text-center mb-5"><?= isset($data) ? "Edit" : "Tambah" ?> Petisi</h1>
  <form action="<?= isset($data) ? site_url('InputPetisiController/editPetisi/'.$data) : site_url('InputPetisiController/addPetisi/'.$this->session->userdata('username')) ?>" method="post">
    <?php if (isset($data)) { $get = $this->InputPetisiModel->getPetisiById($data); ?>
      <div class="mb-3 d-flex">
        <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="judul_petisi" style="min-width: 140px; max-width: 140px;">Judul Petisi</label>
        <input type="text" name="judul_petisi" id="judul_petisi" class="form-control" value="<?= $get->judul_petisi ?>" required>
      </div>
      <div class="mb-3 d-flex">
        <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="kebutuhan_dana" style="min-width: 140px; max-width: 140px;">Kebutuhan Dana</label>
        <input type="number" name="kebutuhan_dana" id="kebutuhan_dana" class="form-control" value="<?= $get->kebutuhan_dana ?>" required>
      </div>
      <div class="mb-3 d-flex">
        <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="durasi" style="min-width: 140px; max-width: 140px;">Tanggal Tutup</label>
        <input type="date" name="durasi" id="durasi" class="form-control" value="<?= date('Y-m-d', strtotime($get->tgl_post.' + '.$get->durasi_hari.' days')) ?>" required>
      </div>
      <div class="mb-3 d-flex">
        <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="deskripsi" style="min-width: 140px; max-width: 140px;">Deskripsi</label>
        <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" rows="4" required ><?= $get->deskripsi ?></textarea>
      </div>
    <?php } else { ?>
    <div class="mb-3 d-flex">
      <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="judul_petisi" style="min-width: 140px; max-width: 140px;">Judul Petisi</label>
      <input type="text" name="judul_petisi" id="judul_petisi" class="form-control" required>
    </div>
    <div class="mb-3 d-flex">
      <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="kebutuhan_dana" style="min-width: 140px; max-width: 140px;">Kebutuhan Dana</label>
      <input type="number" name="kebutuhan_dana" id="kebutuhan_dana" class="form-control" required>
    </div>
    <div class="mb-3 d-flex">
      <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="durasi" style="min-width: 140px; max-width: 140px;">Tanggal Tutup</label>
      <input type="date" name="durasi" id="durasi" class="form-control" required>
    </div>
    <div class="mb-3 d-flex">
      <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="deskripsi" style="min-width: 140px; max-width: 140px;">Deskripsi</label>
      <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
    </div>
    <?php } ?>
    <div class="mb-3 d-flex justify-content-end">
      <a href="<?= base_url('ManagePetisiController') ?>" class="btn btn-primary me-2">Cancel</a>
      <input type="submit" class="btn btn-primary" />
    </div>
  </form>
</div>