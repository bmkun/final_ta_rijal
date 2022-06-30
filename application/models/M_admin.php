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

        if ($table == "santri") {
            $data = array(
                'Verification' => "Y",

            );
            $this->db->where('id', $id);
        } else {
            $data = array(
                'Verification' => "Y",
                'Status_guru' => "aktif"

            );
            $this->db->where('id_guru', $id);
        }

        $this->db->update($table, $data);
    }

    function status_guru($id_guru, $status_guru)
    {

        if ($status_guru == 'aktif') {
            $data = array(
                'Status_guru' => 'nonaktif'
            );
        } else {
            $data = array(
                'Status_guru' => 'aktif'
            );
        }


        $this->db->where('id_guru', $id_guru);


        $this->db->update('guru', $data);
    }

    function pilih_kelas($kelas)
    {
        // pilih kelas diniah berdasarkan id kelas / santri sudah punya kelas sebelumnya
        $kelas_diniah = $this->db->query("SELECT * FROM santri WHERE Kelas_diniah =$kelas")->result_array();
        return $kelas_diniah;
    }


    function santri_baru()
    {
        // tampilkan seluruh siswa yang belum memiliki kelas
        $kelas_baru = $this->db->query("SELECT * FROM santri WHERE Kelas_ummi IS NULL AND Kelas_diniah IS NULL and Verification='Y'")->result_array();
        return $kelas_baru;
    }

    function list_kelas($tabel, $kd_kelas)
    {
        $query = $this->db->get_where($tabel, array('kd_kelas' => $kd_kelas))->result_array();
        return $query;
        // return $this->db->get($tabel)->result_array();
    }

    // pilih santri berdasarkan kelas diniahnya
    function kelas_santri($kd_kelas, $kelas)
    {
        if ($kd_kelas == "diniah") {
            $query = $this->db->query("SELECT * FROM santri INNER JOIN kelas ON santri.`Kelas_diniah` = kelas.`id_kelas` WHERE kd_kelas='$kd_kelas' && Kelas_diniah='$kelas';")->result_array();
            return $query;
        } else if ($kd_kelas == "ummi") {
            $query = $this->db->query("SELECT * FROM santri INNER JOIN kelas ON santri.`Kelas_ummi` = kelas.`id_kelas` WHERE kd_kelas='$kd_kelas'&& Kelas_ummi='$kelas';")->result_array();
            return $query;
        }
    }


    // not good
    function kelas_guru($kd_kelas)
    {

        // query belum dicoba

        $query = $this->db->query("
    SELECT * FROM kelas_guru 
    INNER JOIN guru ON kelas_guru.`id_guru` = guru.`id_guru` 
    INNER JOIN kelas ON kelas_guru.`id_kelas` = kelas.`id_kelas` WHERE kd_kelas ='$kd_kelas'
    and Status_guru='aktif' ORDER BY guru.id_guru ASC
    ")->result_array();

        return $query;
    }

    function show_all_kelas($kd_kelas)
    {

        return $this->db->query("SELECT * FROM kelas WHERE kd_kelas='$kd_kelas'")->result_array();
    }
}
