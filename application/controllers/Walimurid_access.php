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

        $data['sidebar_role'] = "wali";
        $data['tittle'] = "Biodata santri";
        $data['status_biodata'] = $this->m_walimurid->biodata_check();
        $data['show_biodata'] = $this->m_walimurid->biodata_show();
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/walimurid/biodata_santri", $data);
        $this->load->view("tpq/footer");
    }
    function submit_biodata()
    {
        $data = [
            'id_santri' => $this->input->post('user_id'),
            'Tahun_pendaftaran' => date("Y"),
            'Nama' => $this->input->post('nama'),
            'Umur' => $this->input->post('tgl_lahir'),
            'Jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'Nama_ayah' => $this->input->post('ayah'),
            'Nama_ibu' => $this->input->post('ibu'),
            'Sekolah_formal' => $this->input->post('sekolah_formal'),
            'No_HP_ortu' => $this->input->post('no_hp'),
            'Alamat' => $this->input->post('alamat'),
            'Kelas_ummi' => null,
            'Kelas_diniah' => null

        ];
        // print_r($_POST);
        $this->m_walimurid->insert_data('santri', $data);
        redirect('walimurid_access/biodata_santri');
    }
    function nilai_ummi_santri()
    {
        $data['sidebar_role'] = "wali";
        $data['tittle'] = "Nilai Ummi";
        $data['status_biodata'] = $this->m_walimurid->biodata_check();
        $data['show_biodata'] = $this->m_walimurid->biodata_show();
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/walimurid/nilai_ummi", $data);
        $this->load->view("tpq/footer");
    }
}
