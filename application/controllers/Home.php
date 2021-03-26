<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('scan');
    }

    public function tes()
    {
        $this->load->view('tes');
    }
}

/* End of file Home.php */
