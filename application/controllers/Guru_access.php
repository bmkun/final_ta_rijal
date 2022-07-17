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
    function nilai_ummi()
    {

        $data['kelas_guru_ummi'] = $this->m_guru->kelas_guru('diniah');
        print_r($data['kelas_guru_ummi'][0]['id_kelas']);
        print_r($data['kelas_guru_ummi'][1]['id_kelas']);
        //  $data['kelas_guru_ummi'][0];

        // $data['sidebar_role'] = "guru";
        // $data['tittle'] = "Biodata Guru";
        // $this->load->view("tpq/header", $data);
        // $this->load->view("tpq/sidebar_role", $data);
        // $this->load->view("tpq/guru/input_nilai_ummi", $data);
        // $this->load->view("tpq/footer");
    }
    function nilai_diniah()
    {

        $data['kelas_guru_ummi'] = $this->m_guru->kelas_guru('diniah');
        $kelas1 = $data['kelas_guru_ummi'][0]['id_kelas'];
        $kelas2 = $data['kelas_guru_ummi'][1]['id_kelas'];

        $data['santri'] = $this->m_guru->santri_diniah($kelas1, $kelas2);
        print_r($data['santri']);

        $data['sidebar_role'] = "guru";
        $data['tittle'] = "Biodata Guru";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/guru/input_nilai_diniah", $data);
        $this->load->view("tpq/footer");
    }
}
