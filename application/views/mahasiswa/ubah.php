<div class="container ">

    <div class="row mt-3  justify-content-center align-items-center">
        <div class="col-md-10 ">
            <div class="card ">
                <div class="card-header ">
                    Form Ubah Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_mhs">ID</label>
                            <input type="hidden" name="id_mhs" class="form-control" id="id_mhs" value="<?= $mahasiswa['id_mhs'] ?>">
                            <small class="form-text text-danger"><?= form_error('id_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim_mhs">NIM</label>
                            <input type="text" name="nim_mhs" class="form-control" id="nim_mhs" value="<?= $mahasiswa['nim_mhs'] ?>">
                            <small class="form-text text-danger"><?= form_error('nim_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_mhs">Nama Lengkap</label>
                            <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" value="<?= $mahasiswa['nama_mhs'] ?>">
                            <small class="form-text text-danger"><?= form_error('nama_mhs'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="email_mhs">Email</label>
                            <input type="email" name="email_mhs" class="form-control" id="email_mhs" value="<?= $mahasiswa['email_mhs'] ?>">
                            <small class="form-text text-danger"><?= form_error('email_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_mhs">Tanggal Lahir</label>
                            <input type="date" name="tgl_mhs" class="form-control" id="tgl_mhs" value="<?= $mahasiswa['tgl_mhs'] ?>">
                            <small class="form-text text-danger"><?= form_error('tgl_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="agama_mhs">Agama</label>
                            <select name="agama_mhs" class="form-control" id="agama_mhs">
                                <option value=""></option>
                                <option value="Islam" <?php if ($mahasiswa['agama_mhs'] == 'Islam') echo "selected"; ?>>Islam</option>
                                <option value="Kristen" <?php if ($mahasiswa['agama_mhs'] == 'Kristen') echo "selected"; ?>>Kristen</option>
                                <option value="Hindu" <?php if ($mahasiswa['agama_mhs'] == 'Hindu') echo "selected"; ?>>Hindu</option>
                                <option value="Budha" <?php if ($mahasiswa['agama_mhs'] == 'Budha') echo "selected"; ?>>Budha</option>
                                <option value="Lainnya" <?php if ($mahasiswa['agama_mhs'] == 'Lainnya') echo "selected"; ?>>Lainnya</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('agama_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kelas_mhs">Kelas</label><br>
                            <input type="radio" name="kelas_mhs" value="A" <?php if ($mahasiswa['kelas_mhs'] == 'A') echo "checked"; ?>> A<br>
                            <input type="radio" name="kelas_mhs" value="B" <?php if ($mahasiswa['kelas_mhs'] == 'B') echo "checked"; ?>> B<br>
                            <small class="form-text text-danger"><?= form_error('kelas_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat_mhs">Alamat</label>
                            <textarea type="text" name="alamat_mhs" class="form-control" id="alamat_mhs" value="<?= $mahasiswa['alamat_mhs'] ?>"></textarea>
                            <small class="form-text text-danger"><?= form_error('alamat_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="foto_mhs">Foto</label>
                            <input type="file" name="foto_mhs" class="form-control" id="foto_mhs" value="<?= $mahasiswa['foto_mhs'] ?>">

                            <small class="form-text text-danger"><?= form_error('foto_mhs'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right" onclick="ubahData()">Ubah Data</button>
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