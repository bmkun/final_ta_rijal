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
    // guru ngajar di kelas apa saja 
    function kelas_guru($kd_kelas)
    {
        $user = $this->ion_auth->user()->row();
        $user_id =  $user->id;
        $get_id_guru = $this->db->query(
            "SELECT id_guru FROM guru WHERE user_id = $user_id;"
        )->row_array();
        // mendapatkan id guru
        $id_guru =  $get_id_guru['id_guru'];
        // menampilkan kelas guru 
        $kelas_guru = $this->db->query(
            "
            SELECT * FROM kelas_guru INNER JOIN kelas ON kelas_guru.`id_kelas`=kelas.`id_kelas` 
            WHERE id_guru = $id_guru AND kd_kelas='$kd_kelas'
            "
        )->result_array();

        return $kelas_guru;
    }

    function santri_diniah($kelas1, $kelas2)
    {
        $kelas_santri = $this->db->query("
        SELECT Nama,Kelas,santri.id_santri,kelas.`id_kelas`id_kelas 
        FROM kelas_santri INNER JOIN santri ON Kelas_santri.`id_santri` = santri.`id_santri` 
INNER JOIN kelas ON kelas_santri.`id_kelas` = kelas.`id_kelas` 
WHERE Kelas_santri.id_kelas = 1 OR Kelas_santri.id_kelas = 10 AND Verification='Y'")->result_array();
        return $kelas_santri;
    }
}
