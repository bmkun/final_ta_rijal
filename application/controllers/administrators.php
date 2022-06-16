<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrators extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model("m_admin");
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
        $data['data_guru'] = $this->m_admin->show_data("guru");
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Guru";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/data_guru", $data);
        $this->load->view("tpq/footer");
    }
    function data_santri()
    {
        $data['data_santri'] = $this->m_admin->show_data("santri");
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Santri";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/data_santri", $data);
        $this->load->view("tpq/footer");
    }

    function verifikasi_santri()
    {
        $data['data_santri'] = $this->m_admin->show_verified("santri");
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Santri";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/santri_verifikasi", $data);
        $this->load->view("tpq/footer");
    }

    function verifikasi_guru()
    {
        $data['data_guru'] = $this->m_admin->show_verified("guru");
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Guru";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/guru_verifikasi", $data);
        $this->load->view("tpq/footer");
    }


    function action_ver_santri($id)
    {
        $this->m_admin->verified_account($id, "santri");
        redirect(site_url('administrators/verifikasi_santri'));
    }

    function action_ver_guru($id)
    {
        $this->m_admin->verified_account($id, "guru");
        redirect(site_url('administrators/verifikasi_guru'));
    }

    // function verifikasi_guru()
    // {
    //     $data['data_santri'] = $this->m_admin->show_verified("santri");
    //     $data['sidebar_role'] = "administrator";
    //     $data['tittle'] = "Data Santri";
    //     $this->load->view("tpq/header", $data);
    //     $this->load->view("tpq/sidebar_role", $data);
    //     $this->load->view("tpq/administrator/santri_verifikasi", $data);
    //     $this->load->view("tpq/footer");
    // }


    function ummi()
    {
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "raport ummi";

        $this->load->view("tpq/guru/raport_ummi");
    }
}
