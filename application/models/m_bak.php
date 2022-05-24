<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bak extends CI_Model
{
    function cek_kelunasan()
    {
        $query = $this->db->query("SELECT * FROM registrasi_mahasiswa WHERE id_partner!= 'organik' && id_bak is null")->result_array();
        return $query;
    }
    function bak_verifikasi_kelunasan()
    {
        // $query = 
    }
    function waitinglist_notif()
    {
        $query = $this->db->query("SELECT count(id_partner) as notif from registrasi_mahasiswa WHERE id_partner!= 'organik' && id_bak is null;")->result_array();
        return $query;
    }
    function claim_fee_notif()
    {
        $query = $this->db->query("SELECT count(id_nota) as notif_claim_fee from nota_afm_partner WHERE upload_transfer is null;")->result_array();
        return $query;
    }
    function get_nota()
    {
        return $this->db->query("select * from nota_afm_partner join afm_partner using(id_partner) where upload_transfer is null order by tgl_request_fee ")->result_array();
    }
    function select_update_nota($id_nota)
    {
        return $this->db->query("select * from nota_afm_partner where id_nota=$id_nota")->result_array();
    }
    function fee_history()
    {
        $query = $this->db->query("select * from nota_afm_partner")->result_array();
        return $query;
    }
}
