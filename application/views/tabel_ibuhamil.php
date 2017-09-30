<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Ibu Hamil</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">                
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr style="font-size: 14px; " >
                                <th style="text-align: center; width: 10%">Identitas Ibu</th>
                                <th style="text-align: center;">Nama Ibu Hamil</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">Usia Kandungan</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bumil as $b) {?>
                            <tr style="font-size: 14px;">
                                <td style="text-align: center;"><?php echo $b['idIbu'];?></td>
                                <td style="text-align: center;"><?php echo $b['namaBumil'];?></td>
                                <td style="text-align: center;"><?php echo $b['alamatBumil'];?></td>
                                <td style="text-align: center;"><?php echo $b['usiaKandungan'];?></td>
                                <td style="text-align: center;">
                                    <a href="<?php echo base_url()."index.php/Ibu_hamil/detail/".$b['idIbu']; ?>" style="text-decoration: none" title="Informasi Lengkap"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                    <a href="<?php echo base_url()."index.php/Ibu_hamil/edit"; ?>" style="text-decoration: none" title="Ubah Data"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                    <a href="<?php echo base_url()."index.php/Bayi/delete"; ?>" style="text-decoration: none" title="Hapus Data"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <p>
                        <a href="<?php echo base_url()."index.php/Ibu_hamil/add"; ?>"><button type="button" class="btn btn-primary">Tambah</button>
                    </p>
                </div>
            </div>
        </div>
    </div>