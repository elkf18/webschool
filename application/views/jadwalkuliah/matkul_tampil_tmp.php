<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Kode</td>
            <td>Mata Kuliah </td>
            <td>SKS</td>
            <td></td>
        </tr>
    </thead>
    <?php foreach ($tmp as $tmp) : ?>
        <tr>
            <td><?php echo $tmp->kode_matkul; ?></td>
            <td><?php echo $tmp->nama_matkul; ?></td>
            <td><?php echo $tmp->sks_matkul; ?></td>
            <td><a href="#" class="hapus" kode="<?php echo $tmp->kode_matkul; ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>

</table>