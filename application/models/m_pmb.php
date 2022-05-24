<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pmb extends CI_Model
{

    function select_all_partner()
    {
        // $query = $this->db->get_where('afm_partner', array('verified' => 0))->result_array();
        $query = $this->db->query("select * from afm_partner join partner_fee using(id_partner_fee) JOIN users ON afm_partner.user_id = users.id where verified=0")->result_array();
        return $query;
    }


    // seluruh data partner yang telah diverifikasi
    function select_all_verified()
    {
        $query = $this->db->query("select * from afm_partner join partner_fee using(id_partner_fee) join users on afm_partner.user_id = users.id where verified=1")->result_array();
        return $query;
    }
    function banner_ads_display()
    {
        $query = $this->db->query('select * from promotion_tools')->result_array();
        return $query;
    }

    function notif_verifikasi()
    {
        $query = $this->db->query("SELECT count(id_partner) as notif from afm_partner WHERE verified=0")->result_array();
        return $query;
    }

    function traffic_pmb()
    {
        $organik = $this->db->query("SELECT COUNT(id_mhs) as organik FROM `registrasi_mahasiswa` WHERE `id_partner`='organik';")->result_array();
        $organik = $organik[0]['organik'];
        $partner = $this->db->query("SELECT COUNT(id_mhs) as partner FROM `registrasi_mahasiswa` WHERE `id_partner`!='organik';")->result_array();
        $partner = $partner[0]['partner'];
        $display_stats = [
            'organik' => $organik,
            'partner' => $partner
        ];
        return $display_stats;
    }
}
