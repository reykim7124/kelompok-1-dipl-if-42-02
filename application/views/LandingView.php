
<h1 class="text-center mt-3">Donasi Untuk Kesejahteraan Bersama</h1>
<?php if ($this->session->userdata('username')) { ?>
    <div class="d-flex my-3">
        <a href="<?= base_url('ManagePetisiController') ?>" class="ms-auto me-3">Manage Petisi</a>
        <a href="<?= base_url('RiwayatTransaksiController') ?>">Riwayat Transaksi</a>

    </div>
<?php } ?>
<div id="container" class="d-flex justify-content-center flex-wrap align-items-stretch">
    <?php foreach ($data as $row) { ?>
        <div class="m-3 d-flex align-items-stretch">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['judul_petisi'] ?></h5>
                </div>
                <img class="card-img-bottom" src="<?= base_url('src/mountains.jpg') ?>" alt="mountains">
                <div class="card-body d-flex flex-column">
                    <p class="card-text"><?= $row['deskripsi'] ?></p>
                    <a href="<?= base_url('HalamanPetisiController/index/'.$row['id_petisi']) ?>" class="btn btn-primary ms-auto mt-auto">Donasi Sekarang</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>