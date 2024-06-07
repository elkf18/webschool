<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Buku
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="kode_buku" value="<?= $buku['kode_buku']; ?>">
                        <div class="form-group">
                            <label for="judul_buku">Judul</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku" value="<?= $buku['judul_buku']; ?>">
                            <small class="form-text text-danger"><?= form_error('judul_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="pengarang_buku">Pengarang</label>
                            <input type="text" name="pengarang_buku" class="form-control" id="pengarang_buku" value="<?= $buku['pengarang_buku']; ?>">
                            <small class="form-text text-danger"><?= form_error('pengarang_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="penerbit_buku">Penerbit</label>
                            <input type="text" name="penerbit_buku" class="form-control" id="penerbit_buku" value="<?= $buku['penerbit_buku']; ?>">
                            <small class="form-text text-danger"><?= form_error('penerbit_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_buku">Deskripsi</label>
                            <input type="text" name="deskripsi_buku" class="form-control" id="deskripsi_buku" value="<?= $buku['deskripsi_buku']; ?>">
                            <small class="form-text text-danger"><?= form_error('deskripsi_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar_buku">Gambar</label>
                            <input type="file" name="gambar_buku" class="form-control" id="gambar_buku" value="<?= $buku['gambar_buku']; ?>">
                            <small class="form-text text-danger"><?= form_error('gambar_buku'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>