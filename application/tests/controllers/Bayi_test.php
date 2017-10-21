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
            $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);
        }
        
        public function test_delete_bayi() {
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('POST', 'Bayi/delete',['IDBAYI' => 'BAYI0001']);
            $this->assertRedirect('Bayi');
        }
        
        public function test_edit_bayi() {
            $_SESSION['username'] = "titis";
            $_SESSION['status'] = "login";
            $output = $this->request('POST', 'Bayi/edit',['IDBAYI' => 'BAYI0001']);
            $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);
        }
}
        
        
?>