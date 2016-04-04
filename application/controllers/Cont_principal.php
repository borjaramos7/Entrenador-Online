<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cont_principal extends CI_Controller {

	public function index()
	{
		$this->load->view('Pagina_principal');
	}
}
