<?php

class Ibu_hamil_test extends TestCase {

    public function setUp() {
        $this->resetInstance();
        $this->CI->load->model('ModelPosyandu');
        $this->objek = $this->CI->ModelPosyandu;
        $this->form_validation = new CI_Form_validation();
    }

    public function test_index_Ibu_hamil() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('GET', 'Ibu_hamil');
        $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);
    }
    public function test_index_Ibu_hamil_gagal() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "kosong";
        $output = $this->request('GET', 'Ibu_hamil');
        $this->assertRedirect(base_url('Welcome'), $output);
    }

    public function test_add() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('GET', 'Ibu_hamil/add');
        $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);
    }

    public function test_processAdd() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/processAdd', ['idIbu' => '3171015408850003',
            'namaBumil' => "Sasha",
            'namaSuami' => 'Suami Sasha',
            'tempatLahir' => "Tempat",
            'tanggalLahir' => '1985/08/17',
            'kandunganKe' => '1',
            'usiaKandungan' => '4',
            'alamatBumil' => 'Surabaya',
            'hpht' => "2017/09/31",
            'tinggiIbu' => '160',
            'beratAwal' => '50']);
        $this->assertRedirect('Ibu_hamil', $output);
    }

    public function test_processAdd_gagal() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/processAdd', ['idIbu' => NULL,
            'namaBumil' => "Sasha",
            'namaSuami' => 'Suami Sasha',
            'tempatLahir' => "Tempat",
            'tanggalLahir' => '1985/08/17',
            'kandunganKe' => '1',
            'usiaKandungan' => '4',
            'alamatBumil' => 'Surabaya',
            'hpht' => "2017/09/31",
            'tinggiIbu' => '160',
            'beratAwal' => '50']);
        $this->assertRedirect('Ibu_hamil/add', $output);
    }

    public function test_edit_Ibu_hamil() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/edit/3171015408850002', ['idIbu' => '3171015408850002']);
        $this->assertContains(' <h1 class="page-header">Tambahkan Data Ibu Hamil</h1>', $output);
    }

    public function test_doUpdate() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/doUpdate', ['idIbu' => '3171015408850002',
            'usiaKandungan' => '6',
            'tinggiIbu' => "165",
            'beratUpdate' => '54',]);
        $this->assertRedirect('Ibu_hamil/detail/' . '3171015408850002', $output);
    }

    public function test_detail_Ibu_hamil() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/detail/3171015408850005', ['idIbu' => '3171015408850005']);
        $this->assertContains('<h4><strong>Nomor Identitas</strong></h4>', $output);
    }

    public function test_detail_Ibu_hamil_middle() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/detail/3171015408850008', ['idIbu' => '3171015408850008']);
        $this->assertContains('<h4><strong>Nomor Identitas</strong></h4>', $output);
    }

    public function test_detail_Ibu_hamil_pendek() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/detail/3171015408850004', ['idIbu' => '3171015408850004']);
        $this->assertContains('<h4><strong>Nomor Identitas</strong></h4>', $output);
    }

    public function test_detail_Ibu_hamil_ideal() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/detail/3171015408850001', ['idIbu' => '3171015408850001']);
        $this->assertContains('<h4><strong>Nomor Identitas</strong></h4>', $output);
    }

    public function test_delete_Ibu_hamil() {
        $_SESSION['username'] = "titis";
        $_SESSION['status'] = "login";
        $output = $this->request('POST', 'Ibu_hamil/delete/3171015408850003', ['idIbu' => '3171015408850003']);
        $this->assertRedirect('Ibu_hamil');
    }

}
