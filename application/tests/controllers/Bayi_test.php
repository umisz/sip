<?php

class Bayi_test extends TestCase
{
	public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('ModelPosyandu');
            $this->objek = $this->CI->ModelPosyandu;
            $this->form_validation = new CI_Form_validation();
        }
        
        public function test_index_bayi(){
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('GET', 'bayi');
            $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);  
        }
        
        public function test_detail_bayi() {
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('POST', 'Bayi/detail',['IDBAYI' => 'BAYI0001']);
            $this->assertContains('<title>Sistem  Posyandu</title>', $output);
        }
        public function test_detail_bayi_perempuan() {
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('POST', 'Bayi/detail',['IDBAYI' => 'BAYI0108']);
            $this->assertContains('<title>Sistem  Posyandu</title>', $output);
        }
        public function test_delete_bayi() {
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('POST', 'Bayi/delete',['IDBAYI' => 'BAYI0001']);
            $this->assertRedirect('Bayi');
        }
        public function test_delete_bayi_gagal() {
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('POST', 'Bayi/delete',['IDBAYI' => 'BAYI1111']);
            $this->assertRedirect('Bayi');
        }
        public function test_edit_bayi() {
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('POST', 'Bayi/edit',['IDBAYI' => 'BAYI0001']);
            $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);
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
            $output = $this->request('POST', 'Bayi/processAdd',
                        ['namaBayi' => 'Bayi',
                        'namaIbu' => "Ibu",
                        'namaAyah' => 'Ayah',
                        'tempatLahir' => "Tempat",
                        'tanggalLahir' => '12/12/2012',
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
            $output = $this->request('POST', 'Bayi/processAdd',
                        ['namaBayi' => 'Bayi',
                        'namaIbu' => "Ibu",
                        'namaAyah' => 'Ayah',
                        'tempatLahir' => "Tempat",
                        'tanggalLahir' => '12/12/2012',
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
            $output = $this->request('POST', 'Bayi/processAdd',
                        ['namaBayi' => 'Bayi',
                        'namaIbu' => "Ibu",
                        'namaAyah' => 'Ayah',
                        'tempatLahir' => "Tempat",
                        'tanggalLahir' => '12/12/2012',
                        'anakKe' => '1',
                        'alamatOrtu' => 'alamat',
                        'jenisKelamin' => 1,
                        'golonganDarah' => "Belum Tahu",
                        'panjangLahir' => '10',
                        'beratLahir' => '10']);
            $this->assertRedirect('Bayi', $output);
        }
        
        public function test_doUpdate() {
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('POST', 'Bayi/doUpdate',
                        ['idBalita' => 'Bayi',
                        'alamatOrtu' => 'alamat',
                        'golonganDarah' => "A",
                        'panjangSekarang' => '10',
                        'beratSekarang' => '10']);
            $this->assertRedirect('Bayi/detail/Bayi', $output);
        }
   
    }
        
        
?>