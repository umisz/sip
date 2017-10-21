<?php
class Logout extends CI_Controller {
  function __construct()
  {

		parent::__construct();		
		$this->load->model('m_login');

  }

  function index()
  {

		$this->session->sess_destroy();
		redirect(base_url('Welcome'));}

}

