<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
 public function __construct()
        {
                
              
        }

	public function index()
	{

		$this->load->view('header');
		$this->load->view('section');
		$this->load->view('footer');
	}
}