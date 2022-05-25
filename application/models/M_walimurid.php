<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_walimurid extends CI_Model
{
    function insert_data($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }
    function biodata_check()
    {

        $id = $this->ion_auth->user()->row()->id;
        $status_form = $this->db->query("SELECT Nama_ibu FROM santri WHERE id_santri = $id && Nama_ibu IS NOT NULL")->num_rows();
        // print_r($status_form);
        if ($status_form == 1) {
            return "done";
        } else {
            return "nothing";
        }
    }
}
