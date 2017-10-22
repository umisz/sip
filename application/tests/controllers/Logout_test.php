<?php

class Logout_test extends TestCase
{
	public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('M_login');
            $this->objek = $this->CI->M_login;
            $this->form_validation = new CI_Form_validation();
        }
        public function test_index() {
            $this->assertFalse( isset($_SESSION['username']) );
            $this->request('GET', 'Logout/index');
            $this->assertRedirect(base_url('Welcome'));
            $this->assertFalse( isset($_SESSION['username']) );
        }
        
}
        
        
?>