<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Mata Kuliah</h1>
    </div>

    <?= anchor('matkul/tambah', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data </button>') ?>

    <table class="table table-striped table-hover table-border">
        <tr>
            <th>No</th>
            <th>Mata Kuliah</th>
            <th>Kode</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($matkul as $mk) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mk['nama_matkul']; ?></td>
                <td><?= $mk['kode_matkul']; ?></td>
                <td><?= $mk['sks_matkul']; ?></td>
                <td>
                    <?= anchor('matkul/ubah/' . $mk['id_matkul'], '<button class="btn btn-sm btn-warning mb-3"><i class="fas fa-edit"></i></button>') ?>
                    <?= anchor('matkul/hapus/' . $mk['id_matkul'], '<button class="btn btn-sm btn-danger mb-3"><i class="fas fa-trash-alt"></i></button>') ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>