<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guru extends CI_Model
{
    function insert_data($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }
    function biodata_check()
    {

        $id = $this->ion_auth->user()->row()->id;
        $status_form = $this->db->query("SELECT id_guru FROM guru WHERE user_id = $id")->num_rows();
        // print_r($status_form);
        // cek apakab biodata sudah diisi
        if ($status_form == 1) {
            return "done";
        } else {
            return "nothing";
        }
    }

    function biodata_show()
    {
        $id = $this->ion_auth->user()->row()->id;
        $biodata_santri = $this->db->query("SELECT * FROM guru WHERE user_id = $id")->row_array();
        return $biodata_santri;
    }
}
