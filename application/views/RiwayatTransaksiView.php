<?php
if ($this->session->userdata('role') == 'admin' || $this->session->userdata('username') == FALSE ) {
  redirect(base_url());
}
?>

<h1 class="my-5">Riwayat Transaksi</h1>
<table class="table-striped table">
  <thead>
    <tr>
      <th>Nama Donasi</th>
      <th>Tanggal Transaksi</th>
      <th>Jumlah Donasi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['judul_petisi'] ?></td>
        <td><?= $row['tgl_transaksi'] ?></td>
        <td><?= $row['jumlah_dana'] ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>