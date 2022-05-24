<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Walimurid_access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    function index()
    {


        $this->load->view("tpq/header");
        $this->load->view("tpq/content");
        $this->load->view("tpq/footer");
    }
}
