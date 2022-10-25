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

    function biodata_show()
    {
        $id = $this->ion_auth->user()->row()->id;
        $biodata_santri = $this->db->query("SELECT * FROM santri WHERE id_santri = $id && Nama_ibu IS NOT NULL")->row_array();
        return $biodata_santri;
    }

    //menampilkan nilai diniah santri seluruh semester yang diambil 
    function nilaiDiniah()
    {

        $id_santri = $this->ion_auth->user()->row()->id;

        $nilaiDiniah = $this->db->query(
            "
            select detail_mapel mapel,tgl_inp_nilai tahun,nilai, semester from nilai_diniah nd 
inner join detail_mapel dm on dm.kd_detail_mapel =nd.id_detail_mapel where id_santri = $id_santri
            "
        )->result_array();

        return $nilaiDiniah;
    }
    function nilaiUmmi()
    {

        $id_santri = $this->ion_auth->user()->row()->id;

        $nilaiDiniah = $this->db->query(
            "
            SELECT * FROM nilai_ummi WHERE id_santri =$id_santri order by tahun
            "
        )->result_array();

        return $nilaiDiniah;
    }

    function nilai_santri($id_guru, $semester, $id_kelas)
    {
        function semester()
        {
            $tanggal = date('m');
            if ($tanggal <= 6) {
                return "Ganjil";
            } else {
                return "Genab";
            }
        }
        $semester = semester();
        $tahun = date("Y");
        $nilai_santri = $this->db->query("
        SELECT * FROM nilai_diniah INNER JOIN santri ON nilai_diniah.`id_santri` = santri.`id_santri`
INNER JOIN detail_mapel ON nilai_diniah.`id_detail_mapel` = detail_mapel.`kd_detail_mapel` WHERE semester ='$semester' AND tgl_inp_nilai=$tahun AND santri.id_santri=
        ")->result_array();

        return $nilai_santri;
    }
}
