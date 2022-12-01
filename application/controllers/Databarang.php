<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databarang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/databarang');
        $this->load->view('templates/footer');
	}

	public function editbarang()
	{
		$this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/editbarang');
        $this->load->view('templates/footer');
	}

	public function hapusbarang()
	{
		$this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/hapusbarang');
        $this->load->view('templates/footer');
	}

	public function tambahbarang()
	{
		$this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/tambahbarang');
        $this->load->view('templates/footer');
	}
}