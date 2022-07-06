<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrators extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model("m_admin");
        $this->load->helper('cookie');
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
    function status_guru($id_guru, $status_guru)
    {
        $this->m_admin->status_guru($id_guru, $status_guru);
        redirect("administrators/data_guru");
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
        redirect('administrators/verifikasi_santri');
    }

    function action_ver_guru($id)
    {
        $this->m_admin->verified_account($id, "guru");
        redirect("administrators/verifikasi_guru");
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


    function raport_ummi()
    {
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "raport ummi";



        $this->load->view("tpq/administrator/raport_ummi");
    }
    function kelas_diniah($kelas = '1')
    {

        // santri baru daftar belum ada kelas
        // $data['data_santri'] = $this->m_admin->show_data("santri");
        $cookie = array(
            'name'   => 'kelas_diniah',
            'value'  => $kelas,
            'expire' => '300',
        );
        $this->input->set_cookie($cookie);
        // list kelas diniah dan ummi
        $data['list_kelas_diniyah'] = $this->m_admin->list_kelas('kelas', 'diniah');
        // list kelas diniah dan ummi 


        // pilih santri berdasarkan kelas 
        $data['data_santri'] = $this->m_admin->kelas_santri('diniah', $kelas);


        // pilih santri berdasarkan kelas 

        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Santri Kelas Diniah";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/set_kelas_diniah", $data);
        $this->load->view("tpq/footer");
    }
    function kelas_ummi($kelas = '1')
    {
        $cookie = array(
            'name'   => 'kelas_ummi',
            'value'  => $kelas,
            'expire' => '300',
        );
        $this->input->set_cookie($cookie);
        // list kelas diniah dan ummi
        $data['list_kelas_ummi'] = $this->m_admin->list_kelas('kelas', 'ummi');
        // list kelas diniah dan ummi 


        // pilih santri berdasarkan kelas 
        $data['data_santri'] = $this->m_admin->kelas_santri('ummi', $kelas);

        // print_r($data['data_santri']);
        // pilih santri berdasarkan kelas 

        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Santri Kelas Ummi";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/set_kelas_ummi", $data);
        $this->load->view("tpq/footer");
    }
    // menampilkan seluruh santri yang belum memiliki kelas
    function kelas_santri_baru()
    {
        // list kelas diniah dan ummi
        $data['list_kelas_diniyah'] = $this->m_admin->list_kelas("kelas", 'diniah');
        $data['list_kelas_ummi'] = $this->m_admin->list_kelas("kelas", 'ummi');



        // list kelas diniah dan ummi 
        // seluruh data santri yang sudah diverifikasi dan belum mendapat kelas 
        $data['set_kelas_baru'] = $this->m_admin->santri_baru();
        // seluruh data santri yang sudah diverifikasi dan belum mendapat kelas
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Santri Kelas Baru";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/set_kelas_santribaru", $data);
        $this->load->view("tpq/footer");
    }
    // menambahkan kelas pada santri baru
    function action_kelas_santri_baru($kelas = "1")
    {
        // print_r($this->input->post("Kelas_ummi"));
        $data = array(
            'Kelas_ummi' => $this->input->post("Kelas_ummi"),
            'Kelas_diniah' => $this->input->post("Kelas_diniah"),
        );
        $this->db->where('id_santri', $this->input->post("id_santri"));
        $this->db->update('santri', $data);
        redirect('administrators/kelas_santri_baru/') . $kelas;
    }

    // @update kelas diniah : memindahkan kelas santri diniah
    function action_kelas_santri_diniah($kelas = "1")
    {
        // print_r($this->input->post("url-param"));


        $data = array(
            'Kelas_diniah' => $this->input->post("Kelas_diniah"),
        );
        $this->db->where('id_santri', $this->input->post("id_santri"));
        $this->db->update('santri', $data);

        $kelas =  $this->input->cookie('kelas_diniah', true);
        // print_r($kelas);
        redirect('administrators/kelas_diniah/' . $kelas);
    }
    function action_kelas_santri_ummi($kelas = "6")
    {


        $data = array(
            'Kelas_ummi' => $this->input->post("Kelas_ummi"),
        );
        $this->db->where('id_santri', $this->input->post("id_santri"));
        $this->db->update('santri', $data);

        $kelas =  $this->input->cookie('kelas_ummi', true);
        redirect('administrators/kelas_ummi/' . $kelas);
    }
    // menampilkan seluruh guru yang mengajar pada kelas diniah
    function kelas_guru_diniah()
    {
        $data['data_guru'] = $this->m_admin->show_data("guru");
        $data['list_guru'] = $this->m_admin->kelas_guru('diniah');
        $data['list_kelas_guru'] = $this->m_admin->kelas_guru('diniah');
        $data['all_kelas'] = $this->m_admin->show_all_kelas('diniah');
        $data['kd_direct'] = 'diniah';
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Kelas Guru Diniah";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/set_kelas_guru", $data);
        $this->load->view("tpq/footer");
    }

    // menampilkan seluruh guru yang mengajar pada kelas ummi
    function kelas_guru_ummi()
    {
        // tampilkan seluruh data guru untuk dropdown 
        $data['data_guru'] = $this->m_admin->show_data("guru");
        // tampilkan seluruh guru yang berada pada kelas ummi
        $data['list_guru'] = $this->m_admin->kelas_guru('ummi');
        // tampilkan seluruh ruang kelas
        $data['all_kelas'] = $this->m_admin->show_all_kelas('ummi');
        // tampilkan seluruh guru yang berada pada kelas ummi
        $data['list_kelas_guru'] = $this->m_admin->kelas_guru('ummi');


        $data['kd_direct'] = 'ummi';
        $data['sidebar_role'] = "administrator";
        $data['tittle'] = "Data Kelas Guru Ummi";
        $this->load->view("tpq/header", $data);
        $this->load->view("tpq/sidebar_role", $data);
        $this->load->view("tpq/administrator/set_kelas_guru", $data);
        $this->load->view("tpq/footer");
    }
    // tambah kelas guru
    function action_kelas_guru($kd_direct)
    {

        $data = array(
            'id_guru' => $this->input->post('id_guru'),
            'id_kelas' => $this->input->post('id_kelas')
        );

        $this->db->insert('kelas_guru', $data);

        if ($kd_direct == 'ummi') {
            redirect("administrators/kelas_guru_ummi");
        } else {
            redirect("administrators/kelas_guru_diniah");
        }
    }

    function update_kelas_guru($kd_kelas)
    {
        $data = array(
            'id_kelas' => $this->input->post("id_kelas"),
        );

        $this->db->where('id_kelas_guru', $this->input->post("id_kelas_guru"));
        $this->db->update('kelas_guru', $data);

        // redirect berdasarkan param get $kd_kelas
        if ($kd_kelas == 'ummi') {
            redirect("administrators/kelas_guru_ummi");
        } else {
            redirect("administrators/kelas_guru_diniah");
        }
    }
}
