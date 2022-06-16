<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    function show_data($table)
    {
        // tampilkan seluruh data santri / guru yang sudah diverifikasi
        $query = $this->db->query(" select * from $table where Verification = 'Y'; ")->result_array();
        return $query;
    }

    function show_verified($table)
    {
        // tampilkan seluruh santri yang belum diverifikasi
        $query = $this->db->query("select * from $table WHERE Verification != 'Y' OR Verification IS NULL")->result_array();
        return $query;
    }
    function verified_account($id, $table)
    {
        // verifikasi submit biodata oleh admin
        $data = array(
            'Verification' => "Y",

        );
        if ($table == "santri") {
            $this->db->where('id', $id);
        } else {
            $this->db->where('id_guru', $id);
        }

        $this->db->update($table, $data);
    }
}
