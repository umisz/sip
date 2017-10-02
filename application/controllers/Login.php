<?php
class Login extends CI_Controller {
  function __construct()
  {

		parent::__construct();		
		$this->load->model('m_login');
  }

  function index()
  {

		$this->load->view('v_login');
  }

  function aksi_login()
  {
  		session_start();
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$where = array(
			'username' => $username,
			'password' => $password
			);
		$_SESSION['username'] = $username;
		$cek = $this->m_login->cek_login("kader_admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect("Bayi");

		}else{
			echo "Username dan password salah !";
		}
  }

}
