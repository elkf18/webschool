<div class="container">
    <div class="row ">
        <div class="col-md-6">

            <div class="card ">
                <div class="card-header">
                    Detail Data Buku
                </div>
                <div class="col">
                    <img src="assets/img/<?= $buku['gambar_buku']; ?>" class="img-fluid rounded-start" alt="" >
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $buku['kode_buku']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $buku['judul_buku']; ?></h6>
                    <p class="card-text">Pengarang : <?= $buku['pengarang_buku']; ?></p>
                    <p class="card-text">Penerbit : <?= $buku['penerbit_buku']; ?></p>
                    <p class="card-text">Deskripsi : <?= $buku['deskripsi_buku']; ?></p>

                    <a href="<?= base_url(); ?>buku" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>