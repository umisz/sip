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
  function Encipher($paswd, $key, $key1){
	  	$arrHuruf = str_split($paswd);
	  	$enkripsi = "";
	  	foreach ($arrHuruf as $tmp){
	    	$enkripsi .= chr(ord($tmp)+$key);
  		}	
  		$arrEnkripsi = str_split($enkripsi);
  		$enkrip1 = "";

  		foreach ($arrEnkripsi as $tmp1){
	    	$enkrip1 .= chr(ord($tmp1)-$key1);
  		}	
  		return $enkrip1;
 	}

  function aksi_login()
  {
  		$username = $this->input->post('username');
		$pass = $this->input->post('password');

		$secure = $this->Encipher($pass,3,6);
		$password = sha1(md5($secure));

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

