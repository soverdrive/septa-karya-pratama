<?php

class Hubungi extends CI_Controller {

    var $_array_header;
    var $_array_navigation;
    function __construct() 
	{
        parent::__construct();
        $head['title'] = "Hubungi Kami";
        $this->load->helper('form');
        $head['username'] = "";
        $this->load->vars($head);
        $this->load->view('v_head', $head);
        
        $array_navbar['active'] = 'hubungi';
        $this->load->view('v_navbar', $array_navbar);
        
        $this->_array_navigation = array(
            'Kontak Kami' => site_url('hubungi'),
            'Alamat' => site_url('hubungi/alamat')
        );
		$this->_array_header['msg_status'] = "";
        $this->_array_header['array_navigation'] = $this->_array_navigation;
    }

    public function index() 
	{
        //$this->_array_header['active'] = array_keys($this->_array_navigation)[0];
        $this->load->view('v_header', $this->_array_header);
        $this->load->view('contactus/v_contact_us');
        $this->load_footer();
    }

    public function alamat() 
	{
        //$this->_array_header['active'] = array_keys($this->_array_navigation)[1];
        $this->load->view('v_header', $this->_array_header);
        $this->load->view('contactus/v_address');
        $this->load_footer();
    }

    public function load_footer() 
	{
        $this->load->view('v_footer');
    }
	
	public function sendmail()
	{
		if(isset($_POST['submit_message']))
		{
			$nama = $_POST['nama'];
			$perusahaan = ($_POST['perusahaan'] !="") ? $_POST['perusahaan'] : "-";
			$email = $_POST['email'];
			$pesan = $_POST['pesan'];
			
			$to = "wesker9110@gmail.com";
			$subject = "Pesan masuk pada website Septa Karya Pratama";
			$message = "
			<html>
				<head>
					<title>HTML email</title>
				</head>
				<body>
					<p>Pesan masuk telah diterima, dengan rincian sebagai berikut:</p>
					<table>
						<tr>
							<td>nama</td>
							<td>:</td>
							<td>".$nama."</td>
						</tr>
						<tr>
							<td>perusahaan</td>
							<td>:</td>
							<td>".$perusahaan."</td>
						</tr>
						<tr>
							<td>alamat e-mail</td>
							<td>:</td>
							<td>".$email."</td>
						</tr>
						<tr>
							<td>pesan</td>
							<td>:</td>
							<td>".$pesan."</td>
						</tr>
					</table>
				</body>
			</html>
			";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			//mail($to,$subject,$message,$headers);
			
			$this->_array_header['msg_status'] = (mail($to,$subject,$message,$headers)) ?
			'&nbsp;&nbsp;<font color="green">Pesan berhasil dikirim</font>' :
			'&nbsp;&nbsp;<font color="red">Pengiriman pesan gagal</font>';
		}
		$this->load->view('v_header', $this->_array_header);
		$this->load->view('contactus/v_contact_us');
		$this->load_footer();
	}
}

?>