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
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Nama Ibu Hamil</th>
                                        <th style="text-align: center;">Nama Suami</th>
                                        <th style="text-align: center;">Usia Kandungan</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="font-size: 14px;">
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">Dewi</td>
                                        <td style="text-align: center;">Dewa</td>
                                        <td style="text-align: center;">5 Bulan</td>
                                        <td style="text-align: center;">
                                            <a href="<?php echo base_url()."index.php/Ibu_hamil/detail"; ?>"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                            <a href="<?php echo base_url()."index.php/Ibu_hamil/edit"; ?>"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                            <a href="<?php echo base_url()."index.php/Bayi/delete"; ?>"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>
                                <a href="<?php echo base_url()."index.php/Ibu_hamil/add"; ?>"><button type="button" class="btn btn-primary">Tambah</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>