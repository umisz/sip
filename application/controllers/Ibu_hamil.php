<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu_hamil extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        # $this->load->model('model');
    }

	public function index() {
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('tabel_ibuhamil');
	}

	public function add(){
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('form_ibuhamil');
	}

	public function detail(){
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('detail_ibuhamil');
	}

	public function edit(){
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('edit_ibuhamil');
	}

	public function delete(){
		
	}
}
