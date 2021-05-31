<div id="container" class="d-flex justify-content-center flex-wrap align-items-stretch">
  <div class="m-3 d-flex align-items-stretch">
    <div class="card" style="width: 18rem;">
        <h5 class="card-title text-center bg-primary text-white py-4">Buat Petisi Baru</h5>
      <div class="card-body d-flex justify-content-center align-items-center">
        <a href="<?= base_url("InputPetisiController") ?>">
          <i class="fas fa-plus-circle" style="font-size: 4rem;"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
        async function getAllPetisi() {
            console.log("<?= site_url('ManagePetisiController/getAllPetisi') ?>")
            const res = await fetch("<?= site_url('ManagePetisiController/getAllPetisi/'.$this->session->userdata('username')) ?>")
            const data = await res.json()
            const container = document.getElementById("container")
            data.forEach(e => {
                container.innerHTML +=
                    `<div id="${e.id_petisi}" class="m-3 d-flex align-items-stretch">`+
                        `<div class="card" style="width: 18rem;">`+
                            `<div class="d-flex justify-content-end m-2">`+
                                `<a href="<?= base_url("InputPetisiController/edit") ?>/${e.id_petisi}">`+
                                    `<i class="fas fa-edit"></i>`+
                                `</a>`+
                                `<button type="button" data-id="${e.id_petisi}" data-name="${e.judul_petisi}" style="border: none; outline: none; background: none; cursor: pointer;" class="text-primary mx-1" data-toggle="modal" data-target="#deleteModal">`+
                                    `<i class="fas fa-times"></i>`+
                                `</button>`+
                            `</div>`+
                            `<div class="card-body pt-0">`+
                                `<h5 class="card-title">${e.judul_petisi}</h5>`+
                            `</div>`+
                            `<img class="card-img-bottom" src="<?= base_url('src/mountains.jpg') ?>" alt="mountains">`+
                            `<div class="card-body d-flex flex-column">`+
                                `<p class="card-text">${e.deskripsi}</p>`+
                            `</div>`+
                        `</div>`+
                    `</div>`
            });            
        }

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

        getAllPetisi()
    })
</script>