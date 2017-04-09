<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent::__construct();
        
		//$this->load->library('form_validation');
        //$this->load->helper('text');
    //    $this->load->helper('url');
	}
	
	public function index()
	{		
		$this->render('admin/admin');
	//	$this->load->view('admin/admin');
	}
	
	public function portofolio()
	{		
		//$this->load->view('header');
		//$this->load->view('utama');
		//$this->load->view('footer');
		$this->render('public/portofolio');
	}
}
