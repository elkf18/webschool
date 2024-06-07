<div class="container ">

    <div class="row mt-3  justify-content-center align-items-center">
        <div class="col-md-10 ">
            <div class="card ">
                <div class="card-header ">
                    Form Tambah Kuliah
                </div>
                <!--  -->
                <div class="card-body">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode_matkul">Kode</label>
                            <input type="number" name="kode_matkul" class="form-control" id="kode_matkul">
                            <small class="form-text text-danger"><?= form_error('kode_matkul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Mata Kuliah</label>
                            <button id="carimatkul" class="btn btn-success"> Cari Mata Kuliah <i class="glyphicon glyphicon-search"></i></button>
                        </div>
                        <div class="form-group">
                            <label for="nama_matkul">Mata Kuliah</label>
                            <input type="text" name="nama_matkul" class="form-control" id="nama_matkul" readonly="readonly">
                            <small class="form-text text-danger"><?= form_error('nama_matkul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="sks_matkul">SKS</label>
                            <input type="text" name="sks_matkul" class="form-control" id="sks_matkul" readonly="readonly">
                            <small class="form-text text-danger"><?= form_error('sks_matkul'); ?></small>
                        </div>
                        <div class="form-group ">
                            <label class="sr-only">Mata Kuliah</label>
                            <button id="tambah_matkul" class="btn btn-primary"> Tambah Jadwal Kuliah <i class="glyphicon glyphicon-plus"></i></button>
                        </div>

                        <!-- <div class="form-group">
                                <label for="smt_matkul">Semester Ke</label>
                                <input type="number" name="smt_matkul" class="form-control" id="smt_matkul">
                                <small class="form-text text-danger"><?= form_error('smt_matkul'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="mk">MK Pengajaran</label>
                                <input type="number" name="mk" class="form-control" id="mk">
                                <small class="form-text text-danger"><?= form_error('mk'); ?></small>
                            </div> -->

                        <br /><br />

                        <!-- buat tampil tabel tmp     -->
                        <div id="tampil"></div>

                        <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan Data</button>
                    </form>

                </div>
            </div>
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Cari Mata Kuliah</strong></h4>
                        </div>
                        <div class="modal-body"><br />
                            <input type="text" name="cari" id="cari" class="form-control" placeholder="cari kode matkul disini">

                            <div id="tampilmatkul"></div>

                        </div>

                        <br /><br />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <!--<button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>-->
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>


        </div>
    </div>

</div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {

        //alert('');

        $('#dataTables-example').DataTable({
            responsive: true
        });


        //load data tmp 
        function loadData() {
            $("#tampil").load("<?php echo site_url('jadwalkuliah/tampil_tmp') ?>");
        }
        loadData();

        //function buat mengkosong form data matkul setelah di tambah ke tmp
        function EmptyData() {
            $("#kode_matkul").val("");
            $("#nama_matkul").val("");
            $("#sks_matkul").val("");
        }


        //show modal search matkul
        $("#cari").click(function() {
            $("#myModal2").modal("show");

        })

        //search matkul
        $("#carimatkul").keyup(function() {
            var carimatkul = $('#carimatkul').val();

            $.ajax({
                url: "<?php echo site_url('jadwalkuliah/cari_matkul'); ?>",
                type: "POST",
                data: "carimatkul=" + carimatkul,
                cache: false,
                success: function(hasil) {
                    $("#tampilmatkul").html(hasil);

                }
            })

        })


        //tambah matkul dari modal ke form

        $('body').on('click', '.tambah', function() {

            var kode_matkul = $(this).attr("kode_matkul");
            var nama_matkul = $(this).attr("nama_matkul");
            var sks_matkul = $(this).attr("sks_matkul");

            $("#kode_matkul").val(kode_matkul);
            $("#nama_matkul").val(nama_matkul);
            $("#sks_matkul").val(sks_matkul);

            $("#myModal2").modal("hide");

        });


        //event keypress cari kode
        $("#kode_matkul").keypress(function() {

            //13 adalah kode asci buat enter
            if (event.which == 13) {
                var kode_matkul = $("#kode_matkul").val();

                $.ajax({
                    url: "<?php echo site_url('jadwalkuliah/cari_kode_matkul'); ?>",
                    type: "POST",
                    data: "kode_matkul=" + kode_matkul,
                    cache: false,
                    success: function(hasil) {
                        //split digunakan untuk memecah string    
                        data = hasil.split("|");
                        if (data == 0) {
                            alert("matkul " + kode_matkul + " Mata Kuliah Not Found");
                            $("#nama_matkul").val("");
                            $("#sks_matkul").val("");
                        } else {
                            $("#kode_matkul").val(data[0]);
                            $("#nama_matkul").val(data[1]);
                            $("#tambah_matkul").focus();
                        }

                        //console.log(data);
                    }
                })

            }

        }) //end event keypress

        $("#tambah_matkul").click(function() {

            var kode_matkul = $("#kode_matkul").val();
            var nama_matkul = $("#nama_matkul").val();
            var sks_matkul = $("#sks_matkul").val();

            if (kode_matkul == "") {
                alert("Kode " + kode_matkul + " Masih Kosong ");
                $("#kode_matkul").focus();
                return false;
            } else if (nama_matkul == "") {
                alert("Nama Matkul " + nama_matkul + " Masih Kosong ");
                return false;
            } else {
                $.ajax({
                    url: "<?php echo site_url('jadwalkuliah/save_tmp'); ?>",
                    type: "POST",
                    data: "kode_matkul=" + kode_matkul + "&nama_matkul=" + nama_matkul + "&sks_matkul=" + sks_matkul,
                    cache: false,
                    success: function(hasil) {
                        loadData();
                        EmptyData();
                        //alert(hasil);
                        //console.log(data);
                    }
                })
            }

        }) //end tambahmatkul

        // //delete tabel tmp
        $('body').on('click', '.hapus', function() {

            //ambil dulu atribute kodenya
            var kode_matkul = $(this).attr('kode');
            $.ajax({
                url: "<?php echo site_url('jadwalkuliah/hapus_tmp'); ?>",
                type: "POST",
                data: "kode_matkul=" + kode_matkul,
                cache: false,
                success: function(hasil) {
                    // alert(hasil);
                    loadData();
                }
            })


        }); //end delete table tmp





    });
</script>