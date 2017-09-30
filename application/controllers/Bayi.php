<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayi extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPosyandu');
    }

	public function index() {
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('tabel_bayi');
	}

	public function add(){
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('form_bayi');
	}

	public function detail(){
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('detail_bayi');
	}

	public function edit(){
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('edit_bayi');
	}

	public function delete(){

	}
}
