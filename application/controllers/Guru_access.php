<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model("m_guru");
    }

    function biodata_guru()
    {

        $data['sidebar_role'] = "guru";
        $data['tittle'] = "Biodata Guru";
        $data['status_biodata'] = $this->m_guru->biodata_check();
        $data['show_biodata'] = $this->m_guru->biodata_show();
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/guru/biodata_guru", $data);
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

    function submit_biodata()
    {
        $data = [
            'user_id' => $this->input->post('user_id'),
            'Nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'Jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),


        ];
        // print_r($_POST);
        $this->m_guru->insert_data('guru', $data);
        redirect('guru_access/biodata_guru');
    }
}
