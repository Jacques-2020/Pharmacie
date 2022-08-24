<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internaute extends CI_Controller 
{
	public function __construct()
	{
		parent :: __construct();

		$this->load->helper(array('url', 'form'));

		// $this->load->Model();

		$this->load->library('form_validation');

		$this->data['header'] = $this->load->view('Dossier/Tete/Header', '', true);
		
	}
	
	public function index()
	{
		$this->load->view('Dossier/index', $this->data);
	}
}
