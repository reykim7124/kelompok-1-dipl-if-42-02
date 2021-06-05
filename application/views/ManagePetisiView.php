<?php if ($this->session->userdata('username') != TRUE) { redirect(base_url()); } ?>
<div id="container" class="d-flex justify-content-center">
  <div class="m-3 d-flex align-items-stretch justify-content-center flex-wrap">
    <?php if ($this->session->userdata('role') == 'user') { ?>
        <div class="card m-2" style="width: 18rem;">
            <h5 class="card-title text-center bg-primary text-white py-4">Buat Petisi Baru</h5>
            <div class="card-body d-flex justify-content-center align-items-center">
                <a href="<?= base_url("InputPetisiController") ?>">
                <i class="fas fa-plus-circle" style="font-size: 4rem;"></i>
                </a>
            </div>
        </div>
    <?php } ?>
    <?php foreach ($data as $row) { ?>
        <div id="<?= $row['id_petisi'] ?>" class="card m-2" style="width: 18rem;">
            <div class="d-flex justify-content-end m-2">
                <?php if ($this->session->userdata('role') == 'user') { ?>
                    <a href="<?= base_url("InputPetisiController/edit/".$row['id_petisi']) ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                <?php } ?>
                <button type="button" data-id="<?= $row['id_petisi'] ?>" data-name="<?= $row['judul_petisi'] ?>" style="border: none; outline: none; background: none; cursor: pointer;" class="text-primary mx-1" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="card-body pt-0">
                <h5 class="card-title"><?= $row['judul_petisi'] ?></h5>
            </div>
            <img class="card-img-bottom" src="<?= base_url('src/mountains.jpg') ?>" alt="mountains">
            <div class="card-body d-flex flex-column">
                <p class="card-text"><?= $row['deskripsi'] ?></p>
            </div>
        </div>
    <?php } ?>
  </div>
</div>

<script>
    $(document).ready(function() {
        $('#deleteModal').on('show.bs.modal', function(event) {
            const id = $(event.relatedTarget).data('id')
            const name = $(event.relatedTarget).data('name')
            const modal = $(this)
            modal.find('#dataName').text(name)
            $('#deleteButton').on('click', function() {
                $.ajax({
                url: `<?= base_url('ManagePetisiController/deletePetisi/') ?>${id}`,
                type: "GET",
                async: true,
                dataType: "JSON",
                })
                $("#container").find(`#${id}`).remove()
                $("#deleteModal").modal('hide')
            })
        });
    })
</script>