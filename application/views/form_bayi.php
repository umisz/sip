<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambahkan Data Bayi</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method ="POST" action="<?php echo base_url()."index.php/Bayi/processAdd/"?>">
                                <div class="col-lg-6">
                                    <h2>Informasi Pribadi</h2>
                                    <hr>
                                    <div class="form-group">
                                        <label>Nama Bayi</label>
                                        <input class="form-control" type="text" name="namaBayi" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input class="form-control" type="text" name="namaIbu" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input class="form-control" type="text" name="namaAyah" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" type="text" name="tempatLahir" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tanggalLahir">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Anak Ke-</label>
                                            <input class="form-control" type="number" name="anakKe" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="4" name="alamatOrtu" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2>Informasi Kesehatan</h2>
                                    <hr>
                                    <div class="col-lg-6">
                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                                <br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="jenisKelamin" id="optionsRadiosInline1" value="1" checked>Laki - Laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="jenisKelamin" id="optionsRadiosInline2" value="2">Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <select class="form-control" name="golonganDarah" required>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                                <option value="Belum Tahu">Belum Tahu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Panjang Lahir</label>
                                            <input class="form-control" type="text" name="panjangLahir" placeholder="dalam cm" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Berat Lahir</label>
                                            <input class="form-control" type="text" name="beratLahir" placeholder="dalam cm" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-info" style="width: 25%">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
