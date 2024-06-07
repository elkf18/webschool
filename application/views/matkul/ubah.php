<div class="container ">

    <div class="row mt-3  justify-content-center align-items-center">
        <div class="col-md-10 ">
            <div class="card ">
                <div class="card-header ">
                    Form Ubah Mata Kuliah
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_matkul">ID</label>
                            <input type="hidden" name="id_matkul" class="form-control" id="id_matkul" value="<?= $matkul['id_matkul'] ?>">
                            <small class="form-text text-danger"><?= form_error('id_matkul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_matkul">Mata Kuliah</label>
                            <input type="text" name="nama_matkul" class="form-control" id="nama_matkul" value="<?= $matkul['nama_matkul'] ?>">
                            <small class="form-text text-danger"><?= form_error('nama_matkul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_matkul">Kode</label>
                            <input type="text" name="kode_matkul" class="form-control" id="kode_matkul" value="<?= $matkul['kode_matkul'] ?>">
                            <small class="form-text text-danger"><?= form_error('kode_matkul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="sks_matkul">SKS</label><br>
                            <input type="radio" name="sks_matkul" value="1" <?php if ($matkul['sks_matkul'] == '1') echo "checked"; ?>> 1<br>
                            <input type="radio" name="sks_matkul" value="2" <?php if ($matkul['sks_matkul'] == '2') echo "checked"; ?>> 2<br>
                            <input type="radio" name="sks_matkul" value="3" <?php if ($matkul['sks_matkul'] == '3') echo "checked"; ?>> 3<br>
                            <input type="radio" name="sks_matkul" value="4" <?php if ($matkul['sks_matkul'] == '4') echo "checked"; ?>> 4<br>
                            <small class="form-text text-danger"><?= form_error('sks_matkul'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/plugin/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('alamat_mhs');
</script>

<script>
    function ubahData() {
        swal({
            title: 'Data Mahasiswa',
            text: 'Berhasil di ubah!',
            type: "success"
        })
    }
</script>