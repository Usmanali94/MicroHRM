<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
        }

	public function index()
	{
		$data['title']="Dashboard";
		$this->load->view('header_view', $data);
		$this->load->view('dashboard_view',$data);
		$this->load->view('footer_view', $data);
	}
}
