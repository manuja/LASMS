<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('nav_bar');
		$this->load->view('item/item_registration_view');
		$this->load->view('footer');
	}
	
}
