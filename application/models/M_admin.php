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

    function pilih_kelas($kelas)
    {
        // pilih kelas diniah berdasarkan id kelas / santri sudah punya kelas sebelumnya
        $kelas_diniah = $this->db->query("SELECT * FROM santri WHERE Kelas_diniah =$kelas")->result_array();
        return $kelas_diniah;
    }


    function set_kelas_baru()
    {
        // tampilkan seluruh siswa yang belum memiliki kelas
        $kelas_baru = $this->db->query("SELECT * FROM santri WHERE Kelas_ummi IS NULL AND Kelas_diniah IS NULL and Verification='Y'")->result_array();
        return $kelas_baru;
    }

    function list_kelas($tabel)
    {
        return $this->db->get($tabel)->result_array();
    }

    // pilih santri berdasarkan kelas diniahnya
    function kelas_santri_diniah($kelas)
    {
        $query = $this->db->query("SELECT * FROM santri INNER JOIN kelas_dinniyah ON santri.`Kelas_diniah` = kelas_dinniyah.`id_kelas_dinniyah` WHERE Kelas_diniah='$kelas';")->result_array();
        return $query;
    }

    function kelas_santri_ummi($kelas)
    {
        $query = $this->db->query("SELECT * FROM santri INNER JOIN kelas_ummi ON santri.`Kelas_ummi` = kelas_ummi.`id_kelas_ummi` WHERE Kelas_ummi='$kelas';")->result_array();
        return $query;
    }
    function kelas_guru($tabel)
    {
        $query = $this->db->query("
        SELECT id_guru,Nama,kelas_dinniyah.Kelas AS kls_diniah, kelas_ummi.`Kelas`AS kls_ummi FROM guru 
INNER JOIN kelas_ummi 
ON guru.`Kelas_ummi` = kelas_ummi.`id_kelas_ummi` 
INNER JOIN kelas_dinniyah 
ON guru.`Kelas_diniah` = kelas_dinniyah.`id_kelas_dinniyah`
WHERE Status_guru = 'aktiv'
        ")->result_array();
        return $query;
    }
}
