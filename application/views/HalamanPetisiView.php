<div class="container mt-3">
    <div id="container" class="row"></div>
</div>

<script>
$(document).ready(function() {
    function addDate(date, days) {
        const result = new Date(date);
        result.setDate(result.getDate() + parseInt(days));
        return result.toLocaleDateString('id', { day: 'numeric', month: 'long', year: 'numeric' })
    }

    async function getPetisi() {
        const id = window.location.pathname[window.location.pathname.length - 1]
        const res = await fetch(`<?= site_url('HalamanPetisiController/getPetisi/') ?>${id}`)
        const [ data ] = await res.json()
        const currency = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' })
        const container = document.getElementById("container")
        container.innerHTML +=
            `<div class="col-6 p-0">`+
                `<img src="<?= base_url('src/mountains.jpg') ?>" alt="mountains" style="width: 100%; object-fit: cover;">`+
            `</div>`+
            `<div class="col-6 d-flex flex-column p-3 content" style="background-color: #F1F9FF;">`+
                `<h4>${data.judul_petisi}</h4>`+
                `<div>petisi tutup:</div>`+
                `<div>${addDate(data.tgl_post, data.durasi_hari)}</div>`+
                `<div class="mt-2">terkumpul:</div>`+
                `<div>${currency.format(data.dana_terkumpul)} dari ${currency.format(data.kebutuhan_dana)}</div>`+
                `<progress min="0" max="${(data.kebutuhan_dana / data.kebutuhan_dana) * 100}" value="${(data.dana_terkumpul / data.kebutuhan_dana) * 100}" style="width: 75%; height: 30px;"></progress>`+
                `<p>${data.deskripsi}</p>` +
            `</div>`
        const button = addDate(data.tgl_post, data.durasi_hari) < new Date().toLocaleDateString('id', { day: 'numeric', month: 'long', year: 'numeric' }) 
                    ? `<a class="btn btn-primary ms-auto mt-auto" href="#">Donate</a>` : ``
        $(".content").append(button)
    }

    getPetisi()
})
</script>