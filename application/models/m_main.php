<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_main extends CI_Model
{
    function cek_afm_code($id_cookies)
    {
        $query = $this->db->query("select count(id_partner)as id_cookies from afm_partner where id_partner='$id_cookies'")->result_array();
        $afm_partner = $query[0]['id_cookies'];
        // print_r($afm_partner);

        if ($afm_partner == 1) {

            // echo 'ada';
            if (!empty($id_cookies)) {
                setcookie('AFM_ID', $id_cookies, time() + 3600 * 24 * 365);
                // echo 'id ditemukan';
            }

            // insert klik 
            $data = [
                'jumlah_traffic' => 1,
                'id_partner' => $id_cookies,
                'traffic_date' => date('Y-m-d H:i:s')
            ];

            $this->db->insert('traffic_promotion', $data);

            // if ($id_cookies !== null) {

            // }
        }
    }
}
