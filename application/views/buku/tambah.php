<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Buku
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode_buku">Kode Buku</label>
                            <input type="text" name="kode_buku" class="form-control" id="kode_buku">
                            <small class="form-text text-danger"><?= form_error('kode_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku">
                            <small class="form-text text-danger"><?= form_error('judul_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="pengarang_buku">Pengarang Buku</label>
                            <input type="text" name="pengarang_buku" class="form-control" id="pengarang_buku">
                            <small class="form-text text-danger"><?= form_error('pengarang_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="penerbit_buku">Penerbit Buku</label>
                            <input type="text" name="penerbit_buku" class="form-control" id="penerbit_buku">
                            <small class="form-text text-danger"><?= form_error('penerbit_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_buku">Deskripsi Buku</label>
                            <input type="text" name="deskripsi_buku" class="form-control" id="deskripsi_buku">
                            <small class="form-text text-danger"><?= form_error('deskripsi_buku'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar_buku">Gambar Buku</label>
                            <input type="file" name="gambar_buku" class="form-control" id="gambar_buku">
                            <small class="form-text text-danger"><?= form_error('gambar_buku'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>