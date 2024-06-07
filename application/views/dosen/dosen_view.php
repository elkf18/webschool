<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Dosen</h1>
    </div>

    <?= anchor('', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data </button>') ?>

    <table class="table table-striped table-hover table-border">
        <tr>
            <th>NO</th>
            <th>NIDN</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($dosen as $dsn) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $dsn['nidn'] ?></td>
                <td><?= $dsn['nama_dosen'] ?></td>
                <td><?= $dsn['jk_dosen'] ?></td>
                <td><?= $dsn['alamat_dosen'] ?></td>
                <td><?= $dsn['email'] ?></td>
                <td>
                    <?= anchor('', '<button class="btn btn-sm btn-danger mb-3"><i class="fas fa-trash-alt"></i></button>') ?>
                    <?= anchor('', '<button class="btn btn-sm btn-warning mb-3"><i class="fas fa-edit"></i></button>') ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>