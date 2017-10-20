<?php

class Login_test extends TestCase
{
	public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('M_login');
            $this->objek = $this->CI->M_login;
            $this->form_validation = new CI_Form_validation();
        }
         public function test_login(){
            $this->request('POST', 'Login/aksi_login',['username' => 'titis', 'password' => '123admin']);
            $this->assertRedirect('Bayi');  
        }

        public function test_login_error(){
            $output = $this->request('POST', 'Login/aksi_login',['username' => 'titis', 'password' => 'salah']);
            $this->assertContains("Username dan password salah !", $output);
        }
 
        public function test_index() {
            $output = $this->request('GET', 'login');
            $this->assertContains('<title>SIP - Login</title>', $output);
        }
        
}
        
        
?>