<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambahkan Data Ibu Hamil</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <form method ="POST" action="<?php echo base_url()."index.php/Ibu_hamil/processAdd/"?>">
                                    <h2> Informasi Pribadi </h2>
                                    <div class="form-group">
                                        <label>Nomor Identitas </label>
                                        <input class="form-control" name="idIbu" type="number" required>
                                    </div>                                        
                                    <div class="form-group">
                                        <label>Nama Ibu Hamil</label>
                                        <input class="form-control" name="namaBumil" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Suami</label>
                                        <input class="form-control" name="namaSuami" type="text" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempatLahir" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" name="tanggalLahir" type="date" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                    <h2>Informasi Kehamilan</h2>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Kehamilan Ke</label>
                                                <input class="form-control" name="kandunganKe" type="number" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Usia Kandungan</label>
                                                <input class="form-control" name="usiaKandungan" type="number" placeholder="dalam minggu" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Hari Pertama Haid Terakhir (HPHT)</label>
                                                <input class="form-control" name="hpht" type="date" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Tinggi Badan</label>
                                                <input class="form-control" name="tinggiIbu" type="number" placeholder="dalam cm" required> 
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Berat Badan</label>
                                                <input class="form-control" name="beratAwal" type="number" placeholder="dalam kg" required> 
                                            </div>
                                        </div>
                            </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-12">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="3" name="alamatBumil" maxlength="255"></textarea>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-info">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
