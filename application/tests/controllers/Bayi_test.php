<?php

class Bayi_test extends TestCase {

    public function setUp() {
        $this->resetInstance();
        $this->CI->load->model('ModelPosyandu');
        $this->objek = $this->CI->ModelPosyandu;
        $this->form_validation = new CI_Form_validation();
    }

    public function test_index_bayi() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('GET', 'bayi');
        $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);
    }
    
    public function test_index_bayi_salah() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "kosong";
        $output = $this->request('GET', 'bayi');
        $this->assertRedirect(base_url('Welcome'));
    }

    public function test_add() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('GET', 'Bayi/add');
        $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);
    }

    public function test_processAdd() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/processAdd', ['namaBayi' => 'Bayi',
            'namaIbu' => "Ibu",
            'namaAyah' => 'Ayah',
            'tempatLahir' => "Tempat",
            'tanggalLahir' => '2012/12/12',
            'anakKe' => '1',
            'alamatOrtu' => 'alamat',
            'jenisKelamin' => 0,
            'golonganDarah' => "A",
            'panjangLahir' => '10',
            'beratLahir' => '10']);
        $this->assertRedirect('Bayi', $output);
    }

    public function test_processAdd_jk() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/processAdd', ['namaBayi' => 'Bayi',
            'namaIbu' => "Ibu",
            'namaAyah' => 'Ayah',
            'tempatLahir' => "Tempat",
            'tanggalLahir' => '2012/12/12',
            'anakKe' => '1',
            'alamatOrtu' => 'alamat',
            'jenisKelamin' => 1,
            'golonganDarah' => "BT",
            'panjangLahir' => '10',
            'beratLahir' => '10']);
        $this->assertRedirect('Bayi', $output);
    }

    public function test_processAdd_BelumTahu() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/processAdd', ['namaBayi' => 'Bayi',
            'namaIbu' => "Ibu",
            'namaAyah' => 'Ayah',
            'tempatLahir' => "Tempat",
            'tanggalLahir' => '2012/12/12',
            'anakKe' => '1',
            'alamatOrtu' => 'alamat',
            'jenisKelamin' => 1,
            'golonganDarah' => "Belum Tahu",
            'panjangLahir' => '10',
            'beratLahir' => '10']);
        $this->assertRedirect('Bayi', $output);
    }

    public function test_processAdd_Gagal() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/processAdd', ['namaBayi' => NULL,
            'namaIbu' => "Ibu",
            'namaAyah' => 'Ayah',
            'tempatLahir' => "Tempat",
            'tanggalLahir' => '2012/12/12',
            'anakKe' => '1',
            'alamatOrtu' => 'alamat',
            'jenisKelamin' => 1,
            'golonganDarah' => "Belum Tahu",
            'panjangLahir' => '10',
            'beratLahir' => '10']);
        $this->assertRedirect('Bayi/add');
    }

    public function test_detail_bayi() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/detail/BAYI0001', ['IDBAYI' => 'BAYI0001']);
        $this->assertContains('<h1 class="page-header">Detail Bayi</h1>', $output);
    }

    public function test_detail_bayi_perempuan() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/detail/BAYI0004', ['IDBAYI' => 'BAYI0004']);
        $this->assertContains('<h1 class="page-header">Detail Bayi</h1>', $output);
    }

    public function test_detail_bayi_golDarBelumTahu() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/detail/BAYI0016', ['IDBAYI' => 'BAYI0016']);
        $this->assertContains('<h1 class="page-header">Detail Bayi</h1>', $output);
    }

    public function test_edit_bayi() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/edit/BAYI0003', ['IDBAYI' => 'BAYI0003']);
        $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);
    }

    public function test_doUpdate() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/doUpdate', ['idBalita' => 'BAYI0006',
            'alamatOrtu' => 'alamat',
            'golonganDarah' => "A",
            'panjangSekarang' => '10',
            'beratSekarang' => '10']);
        $this->assertRedirect('Bayi/detail/BAYI0006', $output);
    }
    public function test_doUpdate_golDarBelumTahu() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/doUpdate', ['idBalita' => 'BAYI0006',
            'alamatOrtu' => 'alamat',
            'golonganDarah' => "Belum Tahu",
            'panjangSekarang' => '10',
            'beratSekarang' => '10']);
        $this->assertRedirect('Bayi/detail/BAYI0006', $output);
    }

    public function test_delete_bayi() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Bayi/delete/BAYI0002', ['IDBAYI' => 'BAYI0002']);
        $this->assertRedirect('Bayi');
    }

}
