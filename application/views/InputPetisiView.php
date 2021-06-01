<div class="mt-5">
  <h1 class="text-center mb-5">Form Petisi</h1>
  <form action="<?= site_url('InputPetisiController/addPetisi') ?>" method="post">
    <div class="form-group d-flex">
      <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="judul_petisi" style="min-width: 140px; max-width: 140px;">Judul Petisi</label>
      <input type="text" name="judul_petisi" id="judul_petisi" class="form-control" required>
    </div>
    <div class="form-group d-flex">
      <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="kebutuhan_dana" style="min-width: 140px; max-width: 140px;">Kebutuhan Dana</label>
      <input type="number" name="kebutuhan_dana" id="kebutuhan_dana" class="form-control" required>
    </div>
    <div class="form-group d-flex">
      <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="durasi" style="min-width: 140px; max-width: 140px;">Tanggal Tutup</label>
      <input type="date" name="durasi" id="durasi" class="form-control" required>
    </div>
    <div class="form-group d-flex">
      <label class="bg-primary text-white rounded p-1 pl-2 mb-0 " for="deskripsi" style="min-width: 140px; max-width: 140px;">Deskripsi</label>
      <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
    </div>
    <div class="form-group d-flex justify-content-end">
      <a href="<?= base_url('ManagePetisiController') ?>" class="btn btn-primary mr-2">Cancel</a>
      <input type="submit" class="btn btn-primary" />
    </div>
  </form>
</div>