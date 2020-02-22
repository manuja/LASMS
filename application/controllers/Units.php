<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Units extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('nav_bar');
        $this->load->view('stock/unit_view');
        $this->load->view('footer');
    }
}
