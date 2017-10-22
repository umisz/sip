<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bayi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("Welcome"));
        }
        $this->load->model('ModelPosyandu');
    }

    public function index() {
        $bayi = $this->ModelPosyandu->getData('balita', '*');
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('tabel_bayi', array('bayi' => $bayi));
    }

    public function add() {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('form_bayi');
    }

    public function processAdd() {
        $data = $this->ModelPosyandu->dataTerakhir();
        $bayi = $this->ModelPosyandu->getData('balita', 'MAX(RIGHT(idBalita,3)) AS last');
        $lastId = array('last' => $bayi[0]['last']);
        $last = implode("", $lastId);
        $kode = "";
        $baru = 1;
        if ($data->num_rows() > 0) {
            $baru = $last + 1;
            $kode = str_pad($baru, 4, "0", STR_PAD_LEFT);
        }
        $namaBayi = $_POST['namaBayi'];
        $namaIbu = $_POST['namaIbu'];
        $namaAyah = $_POST['namaAyah'];
        $tempatLahir = $_POST['tempatLahir'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $anakKe = $_POST['anakKe'];
        $alamatOrtu = $_POST['alamatOrtu'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $golonganDarah = $_POST['golonganDarah'];
        $panjangLahir = $_POST['panjangLahir'];
        $beratLahir = $_POST['beratLahir'];
        if (!isset($namaBayi) || trim($namaBayi) == '') {
            $idBalita = NULL;
        } else {
            $idBalita = 'BAYI' . $kode;
        }
        echo $idBalita;
        $now = date("Y-m-d");
        $datetime1 = new DateTime($tanggalLahir);
        $datetime2 = new DateTime($now);
        $difference = $datetime1->diff($datetime2)->days;
        $usiaBayi = ceil($difference / 30);

        if ($jenisKelamin == 1) {
            $jkDB = 0;
        } else {
            $jkDB = 1;
        }
        if ($golonganDarah == "Belum Tahu") {
            $gdDB = "BT";
        } else {
            $gdDB = $golonganDarah;
        }
        if ($idBalita == NULL) {
            redirect('Bayi/add');
        } else {
            $tambah_data = array(
                'idBalita' => $idBalita, 'namaBayi' => $namaBayi,
                'namaIbu' => $namaIbu, 'namaAyah' => $namaAyah,
                'tempatLahir' => $tempatLahir, 'tanggalLahir' => $tanggalLahir,
                'alamatOrtu' => $alamatOrtu, 'anakKe' => $anakKe,
                'jenisKelamin' => $jkDB, 'golonganDarah' => $gdDB,
                'usiaBayi' => $usiaBayi,
                'beratLahir' => $beratLahir, 'panjangLahir' => $panjangLahir,
                'beratSekarang' => $beratLahir, 'panjangSekarang' => $panjangLahir
            );
            $res = $this->ModelPosyandu->addData('balita', $tambah_data);
            if ($res >= 1) {
                redirect('Bayi');
            }
        }
    }

    public function informasiBayi($idBalita) {
        $data = $this->ModelPosyandu->getData('balita', '*', 'where idBalita = "' . $idBalita . '"');
        $jkArr = array('jenisKelamin' => $data[0]['jenisKelamin']);
        $golArr = array('golonganDarah' => $data[0]['golonganDarah']);
        $kodeJenis = implode("", $jkArr);
        $kodeGol = implode("", $golArr);
        if ($kodeJenis == 0) {
            $jenisKelamin = "Laki-Laki";
        } else {
            $jenisKelamin = "Perempuan";
        }
        if ($kodeGol == 'BT') {
            $golonganDarah = "Belum Tahu";
        } else {
            $golonganDarah = $kodeGol;
        }
        $bayi = array(
            'idBalita' => $data[0]['idBalita'], 'namaBayi' => $data[0]['namaBayi'],
            'namaIbu' => $data[0]['namaIbu'], 'namaAyah' => $data[0]['namaAyah'],
            'tanggalLahir' => $data[0]['tanggalLahir'], 'tempatLahir' => $data[0]['tempatLahir'],
            'alamatOrtu' => $data[0]['alamatOrtu'], 'anakKe' => $data[0]['anakKe'],
            'panjangLahir' => $data[0]['panjangLahir'], 'beratLahir' => $data[0]['beratLahir'],
            'jenisKelamin' => $jenisKelamin, 'golonganDarah' => $golonganDarah,
            'panjangSekarang' => $data[0]['panjangSekarang'], 'beratSekarang' => $data[0]['beratSekarang']
        );
        return $bayi;
    }

    public function detail($idBalita) {
        $cek = $this->ModelPosyandu->cekId('balita', 'where idBalita = "' . $idBalita . '"');
        if ($cek > 0) {
            $data = $this->informasiBayi($idBalita);
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('detail_bayi', $data);
        } else {
            redirect('Bayi');
        }
    }

    public function edit($idBalita) {
        $cek = $this->ModelPosyandu->cekId('balita', 'where idBalita = "' . $idBalita . '"');
        if ($cek > 0) {
            $data = $this->informasiBayi($idBalita);
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('edit_bayi', $data);
        } else {
            redirect('Bayi');
        }
    }

    public function doUpdate() {
        $idBalita = $_POST['idBalita'];
        $alamatOrtu = $_POST['alamatOrtu'];
        $golonganDarah = $_POST['golonganDarah'];
        $panjangSekarang = $_POST['panjangSekarang'];
        $beratSekarang = $_POST['beratSekarang'];
        $update_data = array(
            'alamatOrtu' => $alamatOrtu,
            'golonganDarah' => $golonganDarah,
            'panjangSekarang' => $panjangSekarang,
            'beratSekarang' => $beratSekarang
        );
        $now = date("Y-m-d");
        $datetime1 = new DateTime($tanggalLahir);
        $datetime2 = new DateTime($now);
        $difference = $datetime1->diff($datetime2)->days;
        $usiaBayi = ceil($difference / 30);

        if ($golonganDarah == "Belum Tahu") {
            $gdDB = "BT";
        } else {
            $gdDB = $golonganDarah;
        }
        $where = array('idBalita' => $idBalita);
        $res = $this->ModelPosyandu->UpdateData('balita', $update_data, $where);
        if ($res >= 1) {
            redirect('Bayi/detail/' . $idBalita);}}

    public function delete($idBalita) {
        $where = array('idBalita' => $idBalita);
        $res = $this->ModelPosyandu->HapusData('balita', $where);
        if ($res >= 1) {
            redirect('Bayi');}}

}
