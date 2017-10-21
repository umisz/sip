<?php

class Ibu_hamil_test extends TestCase
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
            $output = $this->request('GET', 'Ibu_hamil');
            $this->assertContains('<title>Sistem Informasi Posyandu</title>', $output);  
        }
    }
        
        
?>