<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrators extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }
    // function index()
    // {

    //     // if (!$this->ion_auth->logged_in()) {
    //     //     redirect('auth/login', 'refresh');
    //     // } elseif ($this->ion_auth->in_group(1)) {
    //     //     redirect('administrators', 'refresh');
    //     // }

    //     $data['sidebar_role'] = "administrator";
    //     $data['tittle'] = "Data Guru";
    //     $this->load->view("tpq/header", $data);
    //     $this->load->view("tpq/sidebar_role", $data);
    //     $this->load->view("tpq/content");
    //     $this->load->view("tpq/footer");
    // }
    function register_user()
    {
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Guru";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/register_user");
        $this->load->view("tpq/footer");
    }
    function data_guru()
    {
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Guru";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/data_guru");
        $this->load->view("tpq/footer");
    }
    function data_santri()
    {
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Santri";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/data_santri");
        $this->load->view("tpq/footer");
    }

    function ummi()
    {
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "raport ummi";

        $this->load->view("tpq/guru/raport_ummi");
    }
}
