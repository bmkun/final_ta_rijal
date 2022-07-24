<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_access extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model("m_guru");
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        } elseif ($this->ion_auth->in_group(3)) {
            redirect('walimuri_access/biodata_santri', 'refresh');
        } elseif ($this->ion_auth->in_group(4)) {
            redirect('administrators', 'refresh');
        }
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
        $id_guru = $this->m_guru->id_guru();
        $data['id_guru'] = $id_guru; //mencari id guru


        $data['kelas_guru'] = $this->m_guru->kelas_guru('diniah');
        $kelas1 = $data['kelas_guru'][0]['id_kelas'];
        $kelas2 = $data['kelas_guru'][1]['id_kelas'];

        // print_r($kelas1 . $kelas2);


        $data['daftar_kelas'] = $this->m_guru->show_kelas_diniah($kelas1, $kelas2); //dua kelas diniah yang diajar oleh guru


        $data['santri'] = $this->m_guru->santri_diniah($kelas2); //tampilkan seluruh data santri diniah berdasarkan kelas yan diaja guru
        $semester = $this->m_guru->semester();
        $data['semester'] = $semester; //menampilkan semester berapa sekarang 
        $mapel = $this->m_guru->show_mapel($kelas2, $id_guru);
        // print_r($mapel);
        $data['mapel'] = $mapel; //menampilkan id mapel
        $data['tahun'] = date("Y");
        $data['kelas_santri'] = $this->m_guru->kelas($id_guru, $kelas2);

        $data['nilai_santri'] = $this->m_guru->nilai_santri($id_guru, $semester, $kelas2);
        // print_r($data['kelas_santri']);
        $data['sidebar_role'] = "guru";
        $data['tittle'] = "Nilai Diniah";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/guru/input_nilai_diniah", $data);
        $this->load->view("tpq/footer");
    }
    function nilai_diniah2()
    {
        $id_guru = $this->m_guru->id_guru();
        $data['id_guru'] = $id_guru; //mencari id guru


        $data['kelas_guru'] = $this->m_guru->kelas_guru('diniah');
        $kelas1 = $data['kelas_guru'][0]['id_kelas'];
        $kelas2 = $data['kelas_guru'][1]['id_kelas'];

        // print_r($kelas1 . $kelas2);


        $data['daftar_kelas'] = $this->m_guru->show_kelas_diniah($kelas1, $kelas2); //dua kelas diniah yang diajar oleh guru


        $data['santri'] = $this->m_guru->santri_diniah($kelas1); //tampilkan seluruh data santri diniah berdasarkan kelas yan diaja guru
        $semester = $this->m_guru->semester();
        $data['semester'] = $semester; //menampilkan semester berapa sekarang 
        $mapel = $this->m_guru->show_mapel($kelas1, $id_guru);
        $data['mapel'] = $mapel; //menampilkan id mapel
        // print_r($mapel);
        $data['tahun'] = date("Y");
        $data['kelas_santri'] = $this->m_guru->kelas($id_guru, $kelas1);

        $data['nilai_santri'] = $this->m_guru->nilai_santri($id_guru, $semester, $kelas1);
        // print_r($data['kelas_santri']);
        $data['sidebar_role'] = "guru";
        $data['tittle'] = "Nilai Diniah";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/guru/input_nilai_diniah", $data);
        $this->load->view("tpq/footer");
    }
    function act_nilai_diniah()
    {


        $data = [
            'id_santri' => $this->input->post('id_santri'),
            'id_kelas' => $this->input->post('id_kelas'),
            'id_guru' => $this->input->post('id_guru'),
            'id_detail_mapel' => $this->input->post('id_detail_mapel'),
            'nilai' => $this->input->post('nilai'),
            'tgl_inp_nilai' => $this->input->post('tahun'),
            'semester' => $this->input->post('semester'),
            'id_kelas_diniah' => $this->input->post('id_kelas'),
        ];

        $this->db->insert('nilai_diniah', $data);

        $this->session->set_flashdata('notiv', "
        <div class='alert alert-success' role='alert'>
        Data berhasil di inputkan :)
      </div>
        ");
        redirect("guru_access/nilai_diniah");
    }

    function multi_insert()
    {
        $this->load->view("form");
    }
    function multi_insert_act()
    {
    }

    function raport_ummi()
    {

        $this->load->view("tpq/guru/raport_ummi");
    }
    function raport_diniah()
    {

        $this->load->view("tpq/guru/raport_diniah");
    }

    function update_nilai_diniah()
    {
        $data =  [
            'nilai' => $this->input->post('nilai'),
        ];
        $this->db->where("id_nilai_diniah",  $this->input->post('id_nilai_diniah'));
        $this->db->update('nilai_diniah', $data);
        $this->session->set_flashdata('notiv', "
        <div class='alert alert-success' role='alert'>
        Update Nilai berhasil :)
      </div>
        ");
        redirect("guru_access/nilai_diniah");
    }
}
