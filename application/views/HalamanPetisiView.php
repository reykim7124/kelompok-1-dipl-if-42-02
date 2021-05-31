<div class="container mt-3">
    <div id="container" class="row"></div>
</div>

<script>
$(document).ready(function() {
    async function getPetisi() {
        const id = window.location.pathname[window.location.pathname.length - 1]
        const res = await fetch(`<?= site_url('HalamanPetisiController/getPetisi/') ?>${id}`)
        const [ data ] = await res.json()
        const currency = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' })
        console.log(data)
        const container = document.getElementById("container")
        // data.forEach(e => {
        container.innerHTML +=
            `<div class="col-6 p-0">`+
                `<img src="<?= base_url('src/mountains.jpg') ?>" alt="mountains" style="width: 100%; object-fit: cover;">`+
            `</div>`+
            `<div class="col-6 d-flex flex-column p-3" style="background-color: #F1F9FF;">`+
                    `<h4>${data.judul_petisi}</h4>`+
                    `<div>terkumpul</div>`+
                    `<div>${currency.format(data.dana_terkumpul)} dari ${currency.format(data.kebutuhan_dana)}</div>`+
                    `<progress min="0" max="${(data.kebutuhan_dana / data.kebutuhan_dana) * 100}" value="${(data.dana_terkumpul / data.kebutuhan_dana) * 100}" style="width: 75%; height: 30px;"></progress>`+
                    `<p>${data.deskripsi}</p>`+
                // `<div class="d-flex justify-content-end align-items-end" style="heigth: auto-fill;">`+
                    `<a class="btn btn-primary ml-auto mt-auto" href="#">Donate</a>`+
                // `</div>`+
            `</div>`
        // });            
    }

    getPetisi()
})
</script>