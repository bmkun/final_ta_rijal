<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    function index()
    {



        $data['sidebar_role'] = "guru";
        $data['tittle'] = "Ummi";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/content");
        $this->load->view("tpq/footer");
    }
    function diniah()
    {



        $data['sidebar_role'] = "guru";
        $data['tittle'] = "diniah";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/content");
        $this->load->view("tpq/footer");
    }
}
