<?php
if ($this->session->userdata('role') == 'user' || $this->session->userdata('username') == FALSE ) {
  redirect(base_url());
}
?>

<h1 class="my-3">Kelola Akun</h1>
<table class="table-striped table">
  <thead>
    <tr>
      <th>Username</th>
      <th>Nama</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr id="<?= $row['username'] ?>">
        <td><?= $row['username'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td>
          <button type="button" data-id="<?= $row['username'] ?>" data-name="<?= $row['nama'] ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            <i class="fas fa-times"></i>
          </button>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<script>
  $(document).ready(function () {
    $('#deleteModal').on('show.bs.modal', function(event) {
        const username = $(event.relatedTarget).data('id')
        const name = $(event.relatedTarget).data('name')
        const modal = $(this)
        modal.find('#dataName').text(name)
        $('#deleteButton').on('click', function() {
            $.ajax({
            url: `<?= base_url('ManageAkunController/deleteAkun/') ?>${username}`,
            type: "GET",
            async: true,
            dataType: "JSON",
            })
            $("tbody").find(`#${username}`).remove()
            $("#deleteModal").modal('hide')
        })
    });
  })
</script>