<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cregistro extends CI_Controller {

	public function __construct()
    {
        // siempre se debe agregar este constructor.
        parent::__construct();
        //invocar las librerias para los formularos y url
        $this->load->helper(array('url','form'));
        $this->load->library('form_validation');
        //invocar el modelo musuario
        //$this->load->model('musuario');
    }

	
	public function index()
	{
		$this->load->view('vregistro');
	}
}
?>