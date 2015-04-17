<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main
 *
 * @author Yowanda
 */
class proyek extends CI_Controller {

    public function index() 
	{
        $head['title'] = "Proyek";
        $this->load->view('v_head', $head);
		$data['keterangan'] = array();
		// nambah keterangan nya di sini, untuk akses di view nya tinggal panggil variable 
		// $keterangan dan disertai index nya misal $keterangan[0]
		// NB : keterangan dalam bentuk HTML, nanti ditampilkan di bawah gambar saat gambar di klik
		#region tambah keterangan dalam bentuk array
		
		//0 data booth telkomsel
		$data['keterangan'] [] = "
		<u>Telkomsel Indonesia</u>
		<br>
		Booth Pameran Telkomsel Indonesia di Grand City Surabaya
		";
		//1 data booth kiswire
		$data['keterangan'] [] = "
		<u>Kiswire</u>
		<br>
		Booth Pameran Kiswire di Grand City Surabaya
		";
                //2 data arsitektur riverside
		$data['keterangan'] [] = "
		<u>Perumahan River Side. Wage, Sidoarjo</u>
		<br>
		Proses pembangunan Perumahan River Side. Wage, Sidoarjo
		";
                //3 data arsitektur smk grafika
		$data['keterangan'] [] = "
		<u>Sekolah Animasi SMK Grafika Kudus</u>
		<br>
		Proses pembangunan Sekolah Animasi SMK Grafika Kudus
		";
                //4 data interior smk pgri 2 kudus (ganti plafon)
		$data['keterangan'] [] = "
		<u>SMK PGRI 2 Kudus</u>
		<br>
		Proses penggantian plafon SMK PGRI 2 Kudus
		";
                //5 data interior smk pgri 2 kudus (buat dapur dan minibar)
		$data['keterangan'] [] = "
		<u>SMK PGRI 2 Kudus</u>
		<br>
		Hasil desain interior untuk dapur dan minibar di SMK PGRI 2 Kudus
		";
                //6 data interior kantin undip
		$data['keterangan'] [] = "
		<u>Kantin Universitas Diponegoro</u>
		<br>
		Hasil desain interior untuk kantin Universitas Diponegoro Semarang
		";
                //7 data interior lemari 3 pintu
		$data['keterangan'] [] = "
		<u>Lemari 3 Pintu</u>
		<br>
		Hasil desain interior untuk Lemari 3 Pintu
		";
                //8 data interior apartemen detos
		$data['keterangan'] [] = "
		<u>Apartemen Detos</u>
		<br>
		Hasil desain interior untuk Apartemen Detos. Depok, Jawa Barat
		";
                //9 data interior tv panel
		$data['keterangan'] [] = "
		<u>Interior TV Panel</u>
		<br>
		Hasil desain interior untuk TV Panel. Depok, Jawa Barat
		";
                //10 data interior mini bar depok
		$data['keterangan'] [] = "
		<u>Interior Mini Bar</u>
		<br>
		Hasil desain interior untuk Mini Bar. Depok, Jawa Barat
		";
                //11 data interior kitchen set depok
		$data['keterangan'] [] = "
		<u>Interior Kitchen Set Depok</u>
		<br>
		Hasil desain interior untuk Kitchen Set. Depok, Jawa Barat
		";
                //12 data interior kitchen set bsd
		$data['keterangan'] [] = "
		<u>Interior Mini Bar</u>
		<br>
		Hasil desain interior untuk Kitchen Set BSD. Tangerang, Jawa Barat
		";
		#endregion
        $array_navbar['active'] = 'proyek';
        $this->load->view('v_navbar', $array_navbar);
        $this->load->view('v_header');
        $this->load->view('proyek/v_portfolio', $data);
        $this->load->view('v_footer');
    }
}
