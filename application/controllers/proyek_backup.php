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
		
		// data ke-1
		$data['keterangan'] [] = "
		<u>Lorem Ipsum Dolor Sit Amet</u>
		<br>
		Lorem ipsum dolor sit amet
		";
		// data ke-2
		$data['keterangan'] [] = "
		<u>Sample Text</u>
		<br>
		Sample text here for you
		";
		#endregion
        $array_navbar['active'] = 'proyek';
        $this->load->view('v_navbar', $array_navbar);
        $this->load->view('v_header');
        $this->load->view('proyek/v_portfolio', $data);
        $this->load->view('v_footer');
    }
}
