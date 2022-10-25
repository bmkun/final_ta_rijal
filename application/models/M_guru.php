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

        if ($kd_kelas == 'ummi') {
        $kelas_guru = $this->db->query(
            "
            SELECT kelas.id_kelas FROM kelas_guru INNER JOIN kelas ON kelas_guru.`id_kelas`=kelas.`id_kelas` 
            WHERE id_guru = $id_guru AND kd_kelas='$kd_kelas' order by kelas.id_kelas
            "
        )->row_array();
        
            // $kelas_guru =$kelas_guru[0]  
            return $kelas_guru['id_kelas'];
        } else if ($kd_kelas == "diniah") {
            $kelas_guru = $this->db->query(
                "
                SELECT kelas.id_kelas FROM kelas_guru INNER JOIN kelas ON kelas_guru.`id_kelas`=kelas.`id_kelas` 
                WHERE id_guru = $id_guru AND kd_kelas='$kd_kelas' order by kelas.id_kelas
                "
            )->result_array();
            return [$kelas_guru[0],$kelas_guru[1]];

            // print_r($kelas_guru);
        }
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
    public function semester()
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
        $semester = $this->semester();
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

    function inputNilaiDiniah()
    {



        $tahun = date("Y");
        $semester = M_guru::semester();



        // $inpValidation = $this->db->query("
        // select count(id_santri) from nilai_diniah where id_santri =$idSantri and id_guru =$idGuru and semester = '$semester' and tgl_inp_nilai= '$tahun'
        // ");


        // if ($inpValidation == 0) {
        //     $this->db->insert('nilai_diniah', $data);

        //     $this->session->set_flashdata('notiv', "
        //     <div class='alert alert-success' role='alert'>
        //     Data berhasil di inputkan :)
        //   </div>
        //     ");
        //     redirect("guru_access/nilai_diniah");
        // } else {
        //     $this->session->set_flashdata('notiv', "
        //     <div class='alert alert-danger' role='alert'>
        //     Nilai Sudah Ada !!!
        //   </div>
        //     ");
        //     redirect("guru_access/nilai_diniah");
        // }

    }

    function testNilai()
    {
        $tahun = date("Y");
        $semester = M_guru::semester();

        // return $tahun;

        //         $dataSantri = $this->db->query(
        //             "
        //             select distinct Nama,Kelas from nilai_diniah 
        // inner join santri
        // on nilai_diniah.id_santri = santri.id_santri 
        // inner join kelas 
        // on nilai_diniah.id_kelas_diniah = kelas.id_kelas  
        //             "
        //         );

        $nilai = $this->db->query(
            "
            select * from nilai_diniah where id_santri =31 and semester = '$semester' and tgl_inp_nilai= '$tahun';
            "
        )->result_array();

        return $nilai;


        //     $arrayIdSantri = $this->db->query(
        //         "
        //         select id_santri from nilai_diniah where tgl_inp_nilai = '$tahun' and semester  ;
        //         "
        //     )->result_array();

        //     // return $arrayIdSantri;

        //     foreach ($arrayIdSantri as $idLoop) {

        //         $nilai_santri = $this->db->query("
        //         SELECT * FROM nilai_diniah INNER JOIN santri ON nilai_diniah.`id_santri` = santri.`id_santri`
        // INNER JOIN detail_mapel ON nilai_diniah.`id_detail_mapel` = detail_mapel.`kd_detail_mapel`
        // where id_santri = $idLoop
        // ")->result_array();
        //     }
        //     return $nilai_santri;
    }

    function santriUmmi($kdUmmi)
    {
        $santriUmmi = $this->db->query("
        select * from kelas_santri_ummi ksu inner join santri s 
        on ksu.id_santri = s.id_santri 
        ")->result_array();

        return $santriUmmi;
    }

    function nilaiUmmi(){
        $semester = $this->semester();
        $tahun = date("Y");
        $nilaiUmmi = $this->db->query("
        SELECT * FROM nilai_ummi INNER JOIN santri ON nilai_ummi.`id_santri`=santri.`id_santri`
        where tahun=$tahun and semester = '$semester' order by santri.Nama
        ")->result_array();

        return $nilaiUmmi;
    }

    function gradeNilaiDiniah($nilai)
    {
        if ($nilai >= 96 or $nilai == 100) {
            return "A+";
        } else if ($nilai >= 91 or $nilai >= 95) {
            return "A";
        } else if ($nilai >= 86 or $nilai >= 90) {
            return "A-";
        } else if ($nilai >= 81 or $nilai >= 85) {
            return "B+";
        } else if ($nilai >= 76 or $nilai >= 80) {
            return "B";
        } else if ($nilai >= 71 or $nilai >= 75) {
            return "B-";
        } else if ($nilai >= 66 or $nilai >= 70) {
            return "C+";
        } else if ($nilai >= 60 or $nilai >= 65) {
            return "C";
        } else if ($nilai < 60) {
            return "D";
        }
    }
}
