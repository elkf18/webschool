<div class="container ">

    <div class="row mt-3  justify-content-center align-items-center">
        <div class="col-md-10 ">
            <div class="card ">
                <div class="card-header ">
                    Form Tambah Mahasiswa
                </div>
                <!--  -->
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_mhs">ID</label>
                            <input type="number" name="id_mhs" class="form-control" id="id_mhs">
                            <small class="form-text text-danger"><?= form_error('id_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim_mhs">NIM</label>
                            <input type="text" name="nim_mhs" class="form-control" id="nim_mhs">
                            <small class="form-text text-danger"><?= form_error('nim_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_mhs">Nama Lengkap</label>
                            <input type="text" name="nama_mhs" class="form-control" id="nama_mhs">
                            <small class="form-text text-danger"><?= form_error('nama_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email_mhs">Email</label>
                            <input type="email" name="email_mhs" class="form-control" id="email_mhs">
                            <small class="form-text text-danger"><?= form_error('email_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_mhs">Tanggal Lahir</label>
                            <input type="date" name="tgl_mhs" class="form-control" id="tgl_mhs">
                            <small class="form-text text-danger"><?= form_error('tgl_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="agama_mhs">Agama</label>
                            <select name="agama_mhs" class="form-control" id="agama_mhs">
                                <option value=""></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('agama_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kelas_mhs">Kelas</label><br>
                            <input type="radio" name="kelas_mhs" value="A"> A<br>
                            <input type="radio" name="kelas_mhs" value="B"> B<br>
                            <small class="form-text text-danger"><?= form_error('kelas_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat_mhs">Alamat</label>
                            <textarea name="alamat_mhs" class="form-control" id="alamat_mhs"></textarea>
                            <small class="form-text text-danger"><?= form_error('alamat_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="foto_mhs">Foto</label>
                            <input type="file" name="foto_mhs" class="form-control" id="foto_mhs">
                            <small class="form-text text-danger"><?= form_error('foto_mhs'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right" onclick="tambahData()">Tambah Data</button>
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
    function tambahData() {
        swal({
            title: 'Data Mahasiswa',
            text: 'Berhasil di tambah!',
            type: "success"
        })
    }
</script>