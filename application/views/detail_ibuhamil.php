<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail Ibu Hamil</h1>
                    <div class="panel panel-default"> 
                        <div class="panel-body">
                            <h2>Informasi Dasar</h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <h4><strong>Nomor Identitas</strong></h4>
                                        <p><?php echo $idIbu; ?></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4><strong>Nama Ibu Hamil</strong></h4>
                                        <p><?php echo $namaBumil; ?></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4><strong>Nama Suami</strong></h4>
                                        <p><?php echo $namaSuami; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <h4><strong>Tempat Lahir</strong></h4>
                                        <p><?php echo $tempatLahir; ?></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4><strong>Tanggal Lahir</strong></h4>
                                        <p><?php echo $tanggalLahir; ?></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4><strong>Umur</strong></h4>
                                        <p><?php echo $umur; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <h4><strong>Alamat</strong></h4>
                                        <p><?php echo $alamatBumil; ?></p>
                                    </div>
                                </div>
                            </div>
                        <h2>Informasi Kehamilan</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <table style="margin: 20px 0 10px 25px; height: 10%">
                                    <tr style="margin-bottom: 10px;">
                                        <td>Kehamilan Ke </td>
                                        <td style="margin: 0 0 0 5px;"><?php echo $kandunganKe; ?></td>
                                    </tr>
                                    <tr style="margin-bottom: 10px;">
                                        <td>Minggu Ke </td>
                                        <td style="margin: 0 0 0 5px;"><?php echo $usiaKandungan; ?></td>
                                    </tr>
                                    <tr style="margin-bottom: 10px;">
                                        <td>Hari Pertama Haid Terakhir (HPHT)</td>
                                        <td><?php echo $hpht; ?></td>
                                    </tr>
                                    <tr style="margin-bottom: 10px;">
                                        <td>Hari Perkiraan Persalinan</td>
                                        <td><?php echo $perkiraanLahir; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-10">
                                <div class="col-lg-4">
                                    <h4><strong>Tinggi Badan : </strong></h4>
                                    <br>
                                    <p><?php echo $tinggiIbu; ?> cm</p>
                                </div>
                                <div class="col-lg-4">
                                    <h4><strong>Berat badan  : (Awal Kehamilan)</strong></h4>
                                    <p><?php echo $beratAwal; ?> kg</p>
                                </div>
                                <div class="col-lg-4">
                                    <h4><strong>Berat badan : (terakhir)</strong></h4>
                                    <p><?php echo $beratUpdate; ?> kg</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4><strong>Kondisi Kehamilan : </strong></h4>
                                <p><?php echo $status; ?></p>
                            </div>
                        </div>
                        <br><br>
                        <p style="text-align: right;">
                            <a href="<?php echo base_url()."index.php/Ibu_hamil/index"; ?>"><button type="button" class="btn btn-primary">Kembali</button>
                            <a href="<?php echo base_url()."index.php/Ibu_hamil/edit/".$idIbu; ?>"><button type="button" class="btn btn-warning">Edit</button>
                            <a href="<?php echo base_url()."index.php/Ibu_hamil/delete/".$idIbu; ?>"><button type="button" class="btn btn-danger">Hapus</button>
                        </p>
                    </div>
                </div>
            </div>
                    <!-- /.col-lg-12 -->
        </div>
                <!-- /.row -->
    </div>
            <!-- /.container-fluid -->
</div>
        <!-- /#page-wrapper -->
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