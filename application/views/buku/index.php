<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>

    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>buku/tambah" class="btn btn-primary">Tambah
                Data </a>
        </div>
    </div>

    <div class="row ">
        <div class="col">
            <h3>Daftar Buku</h3>
            <table class="table table-bordered">
                <thead class="table-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($buku as $b) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="img/<?= $b['gambar_buku']; ?> " alt="" class="sampul" width="100px"></td>
                            <td><?= $b['kode_buku']; ?></td>
                            <td><?= $b['judul_buku']; ?></td>
                            <td><?= $b['pengarang_buku']; ?></td>
                            <td><?= $b['penerbit_buku']; ?></td>
                            <td><?= $b['deskripsi_buku']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>buku/hapus/<?= $b['kode_buku']; ?>" class="btn btn-danger mb-1">hapus</a>
                                <a href="<?= base_url(); ?>buku/ubah/<?= $b['kode_buku']; ?>" class="btn btn-warning mb-1">ubah</a>
                                <a href="<?= base_url(); ?>buku/detail/<?= $b['kode_buku']; ?>" class="btn btn-success mb-1">detail</a>
                            </td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>

        </div>
    </div>

</div>