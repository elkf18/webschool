<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Mahasiswa</h1>
    </div>

    <?= anchor('mahasiswa/tambah', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data </button>') ?>

    <table class="table table-striped table-hover table-border">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><img src="assets/upload/images/<?= $mhs['foto_mhs']; ?> " alt="" class="sampul" width="100px"></td>
                <td><?= $mhs['nim_mhs']; ?></td>
                <td><?= $mhs['nama_mhs']; ?></td>
                <td><?= $mhs['email_mhs']; ?></td>
                <td><?= $mhs['tgl_mhs']; ?></td>
                <td><?= $mhs['agama_mhs']; ?></td>
                <td><?= $mhs['kelas_mhs']; ?></td>
                <td><?= $mhs['alamat_mhs']; ?></td>
                <td>
                    <?= anchor('mahasiswa/ubah/' . $mhs['id_mhs'], '<button class="btn btn-sm btn-warning mb-3"><i class="fas fa-edit"></i></button>') ?>
                    <?= anchor('mahasiswa/hapus/' . $mhs['id_mhs'], '<button class="btn btn-sm btn-danger mb-3"><i class="fas fa-trash-alt"></i></button>') ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>