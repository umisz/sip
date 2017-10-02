<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Bayi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr style="font-size: 14px">
                                        <th style="text-align: center;">ID</th>
                                        <th style="text-align: center;">Nama Bayi</th>
                                        <th style="text-align: center;">Nama Ibu</th>
                                        <th style="text-align: center;">Nama Ayah</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($bayi as $b){?>
                                    <tr style="font-size: 14px">
                                        <td style="text-align: center;"><?php echo $b['idBalita']; ?></td>
                                        <td style="text-align: center;"><?php echo $b['namaBayi']; ?></td>
                                        <td style="text-align: center;"><?php echo $b['namaIbu']; ?></td>
                                        <td style="text-align: center;"><?php echo $b['namaAyah']?></td>
                                        <td style="text-align: center;">
                                            <a href="<?php echo base_url()."/Bayi/detail/".$b['idBalita']; ?>" style="text-decoration: none;" title="Informasi Lengkap"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                            <a href="<?php echo base_url()."/Bayi/edit/".$b['idBalita']; ?>" style="text-decoration: none;" title="Ubah Data"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                            <a href="<?php echo base_url()."/Bayi/delete/".$b['idBalita']; ?>" style="text-decoration: none;" title="Hapus Data"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <p>
                                <a href="<?php echo base_url()."/Bayi/add"; ?>"><button type="button" class="btn btn-primary">Tambah</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>