<?php if ($matkul->num_rows() > 0) { ?>
    <br /><br />
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Kode Matkul</td>
                <td>Nama Matkul</td>
                <td>SKS Matkul</td>
                <td></td>
            </tr>
        </thead>
        <?php foreach ($matkul->result() as $data) : ?>
            <tr>
                <td><?php echo $data->kode_matkul; ?></td>
                <td><?php echo $data->nama_matkul; ?></td>
                <td><?php echo $data->sks_matkul; ?></td>
                <td><a href="#" class="tambah" kode="<?php echo $data->kode_matkul; ?>" nama_matkul="<?php echo $data->nama_matkul; ?>" sks_matkul="<?php echo $data->sks_matkul; ?>"><i class="glyphicon glyphicon-plus"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
    <br />
    <strong>Mata Kuliah Not Found</strong>

<?php } ?>