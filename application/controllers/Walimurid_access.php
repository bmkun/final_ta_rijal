<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Walimurid_access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('encryption');
        $this->load->model('m_walimurid');
    }

    function biodata_santri()
    {


        $data['sidebar_role'] = "guru";
        $data['tittle'] = "input nilai";
        $data['status_biodata'] = $this->m_walimurid->biodata_check();
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/walimurid/biodata_santri", $data);
        $this->load->view("tpq/footer");
    }
    function submit_biodata()
    {
        $data = [
            'id_santri' => $this->input->post('user_id'),
            'Nama' => $this->input->post('nama'),
            'Umur' => $this->input->post('tgl_lahir'),
            'Jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'Nama_ayah' => $this->input->post('ayah'),
            'Nama_ibu' => $this->input->post('ibu')

        ];
        // print_r($_POST);
        $this->m_walimurid->insert_data('santri', $data);
        redirect('walimurid_access/biodata_santri');
    }
}
