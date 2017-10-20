<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h1 class="page-header">Detail Bayi</h1>
            <div class="panel-body">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Informasi Pribadi</strong>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <h4><strong>ID Bayi</strong></h4>
                                <p><?php echo $idBalita; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Nama Bayi</strong></h4>
                                <p><?php echo $namaBayi; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Nama Ibu</strong></h4>
                                <p><?php echo $namaIbu; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Nama Ayah</strong></h4>
                                <p><?php echo $namaAyah; ?></p>
                            </div>
                            <div class="col-lg-3">
                                <h4><strong>Tempat Lahir</strong></h4>
                                <p><?php echo $tempatLahir; ?></p>
                            </div>
                            <div class="col-lg-3">
                                <h4><strong>Tanggal Lahir</strong></h4>
                                <p><?php echo $tanggalLahir; ?></p>
                            </div>
                            <div class="col-lg-3">
                                <h4><strong>Jenis Kelamin </strong></h4>
                                <p><?php echo $jenisKelamin; ?></p>
                            </div>
                            <div class="col-lg-3">
                                <h4><strong>Anak Ke </strong></h4>
                                <p><?php echo $anakKe; ?></p>
                            </div>
                            <div class="col-lg-12">
                                <h4><strong>Alamat Lengkap  </strong></h4>
                                <p><?php echo $alamatOrtu; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Informasi Kesehatan</strong>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <h4><strong>Golongan Darah </strong></h4>
                                <p><?php echo $golonganDarah; ?></p>
                            </div>
                            <div class="col-lg-3">
                                <h4><strong>Panjang Lahir </strong></h4>
                                <p><?php echo $panjangLahir; ?> cm</p>
                            </div>
                            <div class="col-lg-3">
                                <h4><strong>Berat Lahir </strong></h4>
                                <p><?php echo $beratLahir; ?> kg</p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Panjang Sekarang </strong></h4>
                                <p><?php echo $panjangSekarang; ?> cm</p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Berat Sekarang </strong></h4>
                                <p><?php echo $beratSekarang; ?> kg</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p style="text-align: right;">
                    <a href="<?php echo base_url()."index.php/Bayi"; ?>" style="text-decoration: none;"><button type="button" class="btn btn-primary">Kembali</button>
                    <a href="<?php echo base_url()."index.php/Bayi/edit/".$idBalita; ?>" style="text-decoration: none;"><button type="button" class="btn btn-warning">Edit</button>
                    <a href="<?php echo base_url()."index.php/Bayi/delete/".$idBalita; ?>" style="text-decoration: none;"><button type="button" class="btn btn-danger">Hapus</button>
                </p>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>