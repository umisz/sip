<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Data Ibu Hamil</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <form method ="POST" action="<?php echo base_url()."index.php/Ibu_hamil/doUpdate/"?>">
                                    <div class="form-group">
                                        <div class="col-lg-4">
                                            <label for="disabledSelect">No ID</label>
                                            <input class="form-control" id="disabledInput" name="idIbu" value="<?php echo $idIbu; ?>" placeholder="<?php echo $idIbu; ?>" readonly>
                                            <br>
                                            <label>Minggu Kehamilan</label>
                                            <input class="form-control" name ="usiaKandungan" type="number"  title="Minggu Kehamilan" required>
                                            <br>
                                            <label>Tinggi Badan</label>
                                            <br>
                                            <div class="col-lg-6">
                                                <input class="form-control" name ="tinggiIbu" type="number" step="0.01" title="Perkembangan Tinggi Badan Ibu" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4><strong>cm</strong></h4>
                                            </div>
                                            <br>
                                            <br>
                                            <label>Berat Badan </label>
                                            <br>
                                            <div class="col-lg-6">
                                                <input class="form-control" name ="beratUpdate" step="0.01" title="Perkembangan Berat Badan Ibu" type="number" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4><strong>kg</strong></h4>
                                            </div>
                                            <br>
                                            <br>
                                            <button type="button submit" class="btn btn-primary">Perbarui Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
