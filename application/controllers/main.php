<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->helper('cookie');
    }

    function index()
    {
        if (!empty($this->session->userdata)) {
            if (!$this->ion_auth->logged_in()) {
                redirect('auth/login', 'refresh');
            } elseif ($this->ion_auth->in_group(1)) {
                redirect('administrators', 'refresh');
            } elseif ($this->ion_auth->in_group(2)) {
                redirect('pmb_access', 'refresh');
            } elseif ($this->ion_auth->in_group(3)) {
                redirect('walimurid_access', 'refresh');
            }
        } else {

            $this->load->view('v_login');
        }
    }

    function register()
    {
        $this->load->view('v_register');
    }
    function register_guru()
    {
        $this->load->view('tpq/guru/v_register_guru');
        // $this->load->view('tpq/add_guru');
    }


    function action_register()
    {
        // action register walimurid
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $additional_data = null;
        $group = array('3');

        // jika email sudah ada 
        if ($this->ion_auth->email_check($email) or $this->ion_auth->username_check($username)) {
            $this->session->set_flashdata('notif', "<script>alert('username atau password sudah digunakan');</script>");
            redirect('main/register');
        } else {

            $this->ion_auth->register($username, $password, $email, $additional_data, $group);
            $this->session->set_flashdata('notif', "<script>alert('Berhasil membuat account silahkan login');</script>");
            redirect('auth/login');
        }
    }
    function action_register_guru()
    {
        // action register guru
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $additional_data = null;
        $group = array('6');

        // jika email sudah ada 
        if ($this->ion_auth->email_check($email) or $this->ion_auth->username_check($username)) {
            $this->session->set_flashdata('notif', "<script>alert('username atau password sudah digunakan');</script>");
            redirect('main/register');
        } else {

            $this->ion_auth->register($username, $password, $email, $additional_data, $group);
            $this->session->set_flashdata('notif', "<script>alert('Berhasil membuat account silahkan login');</script>");
            redirect('auth/login');
        }
        // print_r($_POST);
    }

    function login()
    {
        $this->load->view('v_login');
    }

    // set cookie & traffic partner ketika mengunjungi halaman pendaftaran mahasiswa baru
    function penerimaan_mhs()
    {
        // print_r("hasillll" . $this->uri->segment('3') . $this->uri->segment('4'));


        // set kuki
        // set_cookie('AFM_id', $id_cookies, 300000000);
        // $kuki = get_cookie('afp');

        // echo $kuki;
        $id_cookies = $this->uri->segment(3);
        $this->m_main->cek_afm_code($id_cookies);

        // select count(id_partner) from traffic_promotion where id_partner = 'AFP000';3
        // insert klik


        $this->load->view('penerimaan_mhs');
    }

    function action_penerimaan()
    {
        $data = [
            'form_nama' => $this->input->post('form_nama'),
            'form_provLahir' => $this->input->post('form_provLahir'),
            'form_kotaLahir' => $this->input->post('form_kotaLahir'),
            'form_sma' => $this->input->post('form_sma'),
            'form_email' => $this->input->post('form_email'),
            'form_nohp' => $this->input->post('form_nohp'),
            'id_partner' => $this->input->post('id_partner'),
            'tgl_registrasi' => date('Y-m-d')
        ];
        // print_r($data);
        $this->db->insert('registrasi_mahasiswa', $data);
        redirect('main/penerimaan_mhs');
    }


    // direct login to proper user
    function login_groub()
    {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        } else {
            if ($this->ion_auth->in_group(4)) {
                redirect('administrators/data_santri', 'refresh');
            } elseif ($this->ion_auth->in_group(6)) {
                redirect('guru_access/biodata_guru', 'refresh');
            } elseif ($this->ion_auth->in_group(3)) {
                redirect('walimurid_access/biodata_santri', 'refresh');
            } elseif ($this->ion_auth->in_group(1)) {
                redirect(base_url(), 'refresh');
            }
        }
    }

    // halaman untuk user yang telah submit form partner
    function register_submited()
    {



        $user_id = $this->session->userdata('user_id');
        $verified_check =  $this->m_partner->submit_check($user_id);
        if ($verified_check === 'need_verifikasi') {
            $data['title'] = 'DataTelah Di Submit';
            $this->load->view('v_service_manage/a_header', $data);
            $this->load->view('v_service_manage/partner_regist_clear');
            $this->load->view('v_service_manage/partner_register_submited');
            $this->load->view('v_service_manage/data_table_footer');
        } else if ($verified_check === 'has_verified') {
            // echo "telah diverifikasi";
            redirect('partner_access', 'refresh');
        } else {
            redirect('partner_access', 'refresh');
        }
    }

    function termandconditon()
    {
        $data['title'] = 'History Fee';
        $this->load->view('v_service_manage/a_header', $data);
        $this->load->view('termcondition');
        $this->load->view('v_service_manage/data_table_footer');
    }
}
