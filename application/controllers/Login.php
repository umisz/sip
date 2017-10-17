<?php
class Login extends CI_Controller {
  function __construct()
  {

		parent::__construct();		
		$this->load->model('m_login');
  }

  function index()
  {

		$data['err_message'] = "";
		$this->load->view('login',$data);
  }

  function aksi_login()
  {
  		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("kader_admin",$where)->num_rows();
		if($cek > 0){
			session_start();
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$_SESSION['username'] = $username;
			$this->session->set_userdata($data_session);

			redirect("Bayi");

		}else{
			$data['err_message'] = "Username dan password salah !";
			$this->load->view('login',$data);
		}
  }

}

