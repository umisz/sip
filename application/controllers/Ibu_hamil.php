<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu_hamil extends CI_Controller {
	public $idIbu;
	public $namaBumil;			public $namaSuami;
	public $alamatBumil;		public $umur;
	public $usiaKandungan;		public $kandunganKe;
	public function __construct() {
        parent::__construct();
        $this->load->model('ModelPosyandu');
    }
	public function index()
	{
		$bumil = $this->ModelPosyandu->getData('ibuhamil');
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('tabel_ibuhamil',array('bumil'=>$bumil));
	}
	public function add(){
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('form_ibuhamil');
	}
	public function hitungBBIdeal($id){
		$data = $this->ModelPosyandu->getData('ibuhamil','where idIbu = '.$id);
		$tinggiIbu = $data[0]['tinggiIbu'];
		$usiaKandungan = $data[0]['usiaKandungan'];
		$beratUpdate = $data[0]['beratUpdate'];
		if($tinggiIbu >= 160){
			$ntb = "110";
		}
		elseif($tinggiIbu < 160 && $tinggiIbu >= 150){
			$ntb = "105";
		}
		else{
			$status = "100";
		}
		$bbi = $tinggiIbu - $ntb;
		$beratIdeal = $bbi + ($usiaKandungan*(7/20));
		if($beratUpdate == $beratIdeal){
			$status = "Kandungan Sehat";
		}elseif ($beratUpdate < $beratIdeal) {
			$status = "Kandungan Terlalu Kurus";
		}else{
			$status = "Kandungan Terlalu Gemuk";
		}
		echo $status;
	}
	public function detail($id){
		$data = $this->ModelPosyandu->getData('ibuhamil','where idIbu = '.$id);
		$tinggiIbu = $data[0]['tinggiIbu'];
		$usiaKandungan = $data[0]['usiaKandungan'];
		$beratUpdate = $data[0]['beratUpdate'];
		if($tinggiIbu >= 160){
			$ntb = "110";
		}
		elseif($tinggiIbu < 160 && $tinggiIbu >= 150){
			$ntb = "105";
		}
		else{
			$status = "100";
		}
		$bbi = $tinggiIbu - $ntb;
		$beratIdeal = $bbi + ($usiaKandungan*(7/20));
		if($beratUpdate == $beratIdeal){
			$status = "Kandungan Sehat";
		}elseif ($beratUpdate < $beratIdeal) {
			$status = "Kandungan Terlalu Kurus";
		}else{
			$status = "Kandungan Terlalu Gemuk";
		}
		$dataIbu = array('idIbu' => $data[0]['idIbu'],
			'namaBumil'=>$data[0]['namaBumil'], 'namaSuami'=>$data[0]['namaSuami'],
			'alamatBumil'=>$data[0]['alamatBumil'],'umur'=>$data[0]['umur'],
			'usiaKandungan'=>$data[0]['usiaKandungan'],'kandunganKe'=>$data[0]['kandunganKe'],
			'tempatLahir'=>$data[0]['tempatLahir'], 'tanggalLahir'=>$data[0]['tanggalLahir'],
			'beratUpdate'=>$data[0]['beratUpdate'], 'beratAwal'=>$data[0]['beratAwal'],
			'tinggiIbu'=>$data[0]['tinggiIbu'],
			'hpht'=>$data[0]['hpht'], 'perkiraanLahir'=>$data[0]['perkiraanLahir'], 
			'status'=>$status
		);
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('detail_ibuhamil',$dataIbu);
	}

	public function edit(){
		$this->load->view('header');	
		$this->load->view('sidebar');
		$this->load->view('edit_ibuhamil');
	}

	public function delete(){
		
	}
}
