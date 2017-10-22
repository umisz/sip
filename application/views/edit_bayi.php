<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Perbarui Data Bayi</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method ="POST" action="<?php echo base_url()."index.php/Bayi/doUpdate/"?>">
                                <div class="col-lg-6">
                                    <h2>Informasi Pribadi</h2>
                                    <hr>
                                    <div class="form-group">
                                        <label>ID Bayi</label>
                                        <input class="form-control" title="Nomor Daftar Bayi" type="text" name="idBalita" value="<?php echo $idBalita; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Bayi</label>
                                        <input class="form-control" title="Nama Bayi" type="text" name="namaBayi" value="<?php echo $namaBayi; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input class="form-control" title="Nama Ibu Bayi" type="text" name="namaIbu" value="<?php echo $namaIbu; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input class="form-control" type="text" title="Nama Ayah Ibu" name="namaAyah" value="<?php echo $namaAyah; ?>" readonly>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" type="text" title="Tempat Lahir" name="tempatLahir" value="<?php echo $tempatLahir; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date"  title ="Tanggal Lahir" name="tanggalLahir" value="<?php echo $tanggalLahir; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Anak Ke-</label>
                                            <input class="form-control" type="number" name="anakKe" title="Anak Ke-" value="<?php echo $anakKe; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="4" title="Alamat" name="alamatOrtu"><?php echo $alamatOrtu; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2>Informasi Kesehatan</h2>
                                    <hr>
                                    <div class="col-lg-6">
                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <input class="form-control" type="text" title="Jenis Kelamin" name="jenisKelamin" value="<?php echo $jenisKelamin; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <select class="form-control" name="golonganDarah" value="<?php echo $golonganDarah; ?>">
                                                <option <?php if ($golonganDarah == "A") echo 'selected';?> value="A">A</option>
                                                <option <?php if ($golonganDarah == "B") echo 'selected';?> value="B">B</option>
                                                <option <?php if ($golonganDarah == "AB") echo 'selected';?> value="AB">AB</option>
                                                <option <?php if ($golonganDarah == "O") echo 'selected';?> value="O">O</option>
                                                <option <?php if ($golonganDarah == "Belum Tahu") echo 'selected';?> value="Belum Tahu">Belum Tahu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Panjang Lahir</label>
                                            <input class="form-control" title="Panjang Lahir Bayi" type="text" name="panjangLahir" placeholder="dalam cm" value="<?php echo $panjangLahir; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Berat Lahir</label>
                                            <input class="form-control" title="Berat Lahir Bayi" type="text" name="beratLahir" placeholder="dalam cm" value ="<?php echo $beratLahir; ?>" readonly >
                                        </div>
                                    </div>
                                    <br>
                                    <h2>Perkembangan Bayi</h2>
                                    <hr>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Panjang Sekarang</label>
                                            <input class="form-control" title="Panjang Sekarang" type="number" name="panjangSekarang" placeholder="dalam cm" step="0.01" value="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Berat Sekarang</label>
                                            <input class="form-control" type="number" title="Berat Sekarang" name="beratSekarang" placeholder="dalam kg" step="0.01" value ="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-info" style="width: 25%">Perbarui Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
