<div class="container mt-3">
    <div id="container" class="row">
        <div class="col-6 p-0">
            <img src="<?= base_url('src/mountains.jpg') ?>" alt="mountains" style="width: 100%; object-fit: cover;">
        </div>
        <div class="col-6 d-flex flex-column p-3 content" style="background-color: #F1F9FF;">
            <h4><?= $data->judul_petisi ?></h4>
            <div>petisi tutup:</div>
            <div><?= date('d M Y', strtotime($data->tgl_post.' + '.$data->durasi_hari.' days')) ?></div>
            <div class="mt-2">terkumpul:</div>
            <div>
                <?php
                    $fmt = numfmt_create('id_ID', NumberFormatter::CURRENCY);
                    echo numfmt_format_currency($fmt, $data->dana_terkumpul, "IDR").
                    ' dari '.
                    numfmt_format_currency($fmt, $data->kebutuhan_dana, "IDR");
                ?>
            </div>
            <progress min="0" max="<?= ($data->kebutuhan_dana / $data->kebutuhan_dana) * 100 ?>" value="<?= ($data->dana_terkumpul / $data->kebutuhan_dana) * 100 ?>" style="width: 75%; height: 30px;"></progress>
            <div>Deskripsi:</div>
            <p><?= $data->deskripsi ?></p>
            <?php 
                $close = date('Y-m-d', strtotime($data->tgl_post.' + '.$data->durasi_hari.' days'));
                $now = date('Y-m-d');
                if ($now < $close) {
            ?>
                <a class="btn btn-primary ms-auto mt-auto" href="#">Donate</a>
            <?php } ?>
        </div>
    </div>
</div>