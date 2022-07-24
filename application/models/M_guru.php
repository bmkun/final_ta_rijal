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
    function id_guru()
    {
        $user = $this->ion_auth->user()->row();
        $user_id =  $user->id;
        $get_id_guru = $this->db->query(
            "SELECT id_guru FROM guru WHERE user_id = $user_id;"
        )->row_array();
        // mendapatkan id guru
        $id_guru =  $get_id_guru['id_guru'];
        return $id_guru;
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
    // menampilkan kelas guru dan santri
    function kelas($id_guru, $id_kelas)
    {

        $kelas = $this->db->query("
        SELECT * FROM kelas_guru WHERE id_guru=$id_guru AND id_kelas=$id_kelas
        ")->row_array();
        return $kelas;
    }
    // menampilkan seluruh santri yang satukelas denan guru
    function santri_diniah($kelas)
    {
        $kelas_santri = $this->db->query("
        SELECT santri.`id_santri`, santri.`Nama`,kelas.`Kelas`as Kelas,kelas_santri_diniah.id_kelas_diniah FROM santri INNER JOIN 
            kelas_santri_diniah ON santri.`id_santri`= kelas_santri_diniah.`id_santri` 
            INNER JOIN kelas ON kelas_santri_diniah.`id_kelas` = kelas.`id_kelas`
            WHERE kelas_santri_diniah.id_kelas =$kelas AND santri.`Verification` ='Y'")->result_array();
        return $kelas_santri;
    }

    // menampilkan input nilai mapel diniah berdasarkan kelas yang diajar
    function show_mapel($id_kelas, $id_guru)
    {
        $id_mapel = $this->db->query(
            "
            SELECT * FROM kelas_guru WHERE id_guru=$id_guru AND id_kelas=$id_kelas
            "
        )->row_array();
        $id_mapel = $id_mapel['id_mapel'];
        // print_r($id_mapel);
        $query = $this->db->query("
        SELECT * FROM detail_mapel WHERE id_kelas=$id_kelas AND id_mapel=$id_mapel
        ")->row_array();

        return $query;
    }

    // menampilkan semester berapa sekarang
    function semester()
    {
        $tanggal = date('m');
        if ($tanggal <= 6) {
            return "Ganjil";
        } else {
            return "Genab";
        }
    }

    function nilai_santri($id_guru, $semester, $id_kelas)
    {
        $tahun = date("Y");
        $nilai_santri = $this->db->query("
        SELECT * FROM nilai_diniah INNER JOIN santri ON nilai_diniah.`id_santri` = santri.`id_santri`
INNER JOIN detail_mapel ON nilai_diniah.`id_detail_mapel` = detail_mapel.`kd_detail_mapel` WHERE semester ='$semester' AND tgl_inp_nilai=$tahun AND id_guru =$id_guru and nilai_diniah.`id_kelas`=$id_kelas
        ")->result_array();

        return $nilai_santri;
    }

    function show_kelas_diniah($kelas1, $kelas2)
    {
        $kelas  = $this->db->query("
        SELECT * FROM kelas WHERE id_kelas =$kelas1 OR id_kelas = $kelas2;
        ")->result_array();
        return [$kelas[0]['Kelas'], $kelas[1]['Kelas']];
    }
}
