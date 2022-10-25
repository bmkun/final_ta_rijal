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


    function santri_ummi_baru()
    {
        // tampilkan seluruh siswa yang belum memiliki kelas
        // $kelas_baru = $this->db->query("SELECT * FROM santri WHERE Kelas_ummi IS NULL AND Kelas_diniah IS NULL and Verification='Y'")->result_array();



        $santri_baru = $this->db->query("
        SELECT santri.`id_santri`, santri.`Nama`FROM santri LEFT JOIN 
        kelas_santri_ummi ON santri.`id_santri`= kelas_santri_ummi.`id_santri` 
        WHERE kelas_santri_ummi.`id_kelas` IS NULL AND santri.`Verification` ='Y'
        ")->result_array();
        return $santri_baru;
    }
    function santri_diniah_baru()
    {
        $santri_baru = $this->db->query("
        SELECT santri.`id_santri`, santri.`Nama`FROM santri LEFT JOIN 
        kelas_santri_diniah ON santri.`id_santri`= kelas_santri_diniah.`id_santri` 
        WHERE kelas_santri_diniah.`id_kelas` IS NULL AND santri.`Verification` ='Y'
        ")->result_array();
        return $santri_baru;
    }

    function list_kelas($tabel, $kd_kelas)
    {
        $query = $this->db->get_where($tabel, array('kd_kelas' => $kd_kelas))->result_array();
        return $query;
        // return $this->db->get($tabel)->result_array();
    }

    // pilih santri berdasarkan kelas diniahnya
    function kelas_santri($kelas, $id_kelas)
    {
        if ($kelas == "kelas_santri_diniah") {
            $query = $this->db->query("
            SELECT santri.`id_santri`, santri.`Nama`,kelas.`Kelas`as Kelas FROM santri INNER JOIN 
            kelas_santri_diniah ON santri.`id_santri`= kelas_santri_diniah.`id_santri` 
            INNER JOIN kelas ON kelas_santri_diniah.`id_kelas` = kelas.`id_kelas`
            WHERE kelas_santri_diniah.id_kelas =$id_kelas AND santri.`Verification` ='Y' 
            ")->result_array();
            return $query;
        } else if ($kelas == "kelas_santri_ummi") {
            $query = $this->db->query("
            SELECT santri.`id_santri`, santri.`Nama`,kelas.`Kelas` as Kelas FROM santri INNER JOIN 
            kelas_santri_ummi ON santri.`id_santri`= kelas_santri_ummi.`id_santri` 
            INNER JOIN kelas ON kelas_santri_ummi.`id_kelas` = kelas.`id_kelas`
            WHERE kelas_santri_ummi.`id_kelas` = $id_kelas AND santri.`Verification` ='Y'
            ")->result_array();
            return $query;
        }
    }


    // not good
    function kelas_guru($kd_kelas)
    {

        // query belum dicoba

        $query = $this->db->query("
        SELECT id_kelas_guru,guru.id_guru,kd_kelas,Nama,Kelas,nama_mapel,walikelas FROM kelas_guru INNER JOIN mapel ON kelas_guru.`id_mapel`= mapel.`id_mapel`
        INNER JOIN guru ON kelas_guru.`id_guru` = guru.`id_guru`
        INNER JOIN kelas ON kelas_guru.`id_kelas` = kelas.`id_kelas` 
         WHERE kelas.`kd_kelas` ='$kd_kelas' AND Status_guru='aktif'
        ORDER BY guru.id_guru
       
    ")->result_array();

        return $query;
    }

    function show_all_kelas($kd_kelas)
    {

        return $this->db->query("SELECT * FROM kelas WHERE kd_kelas='$kd_kelas'")->result_array();
    }

    function mapel($kd_mapel)
    {
        return $this->db->query("
        SELECT * FROM mapel WHERE mapel_kelas = '$kd_mapel'")->result_array();
    }
    function raport_ummi($kd_mapel)
    {
        $id_santri =  $this->db->query(
            "
        SELECT DISTINCT id_santri FROM nilai_diniah WHERE semester='genab' and `tgl_inp_nilai`='2022'"
        );
        $data_santri = "SELECT * FROM nilai_diniah INNER JOIN santri on nilai_diniah.id_santri = santri.id_santri";
    }

    function raport_diniah($kd_mapel)
    {
        $id_santri =  $this->db->query(
            "
        SELECT DISTINCT id_santri FROM nilai_diniah WHERE semester='genab' and `tgl_inp_nilai`='2022'"
        );
        $data_santri = "SELECT * FROM nilai_diniah INNER JOIN santri on nilai_diniah.id_santri = santri.id_santri";
    }
    // option pilih kelas 
    function printSelect($kdKelas)
    {
        $kelas = $this->db->query("
        select * from kelas where kd_kelas = '$kdKelas'
        ")->result_array();

        return $kelas;
    }
    // generate tahun raport dibuat
    function raportTahun()
    {
        $raportTahun = $this->db->query(
            "
            select distinct(tgl_inp_nilai) from nilai_diniah
            "
        )->result_array();

        return $raportTahun;
    }
    // menampilkan walikelas pada murid
    function findWalikelas($idSantri)
    {

        $idKelas = $this->db->query(
            "select id_kelas from kelas_santri_ummi ksu where id_santri = $idSantri;"
        )->row_array();

        $idKelas = $idKelas['id_kelas'];

        // print_r($idKelas);

        try {
            $walikelas = $this->db->query(
                "
        select Nama namaGuru from kelas_guru kg
        inner join guru g  on kg.id_guru = g.id_guru 
        inner join kelas k on kg.id_kelas = k.id_kelas 
        where walikelas='walikelas' and k.id_kelas = $idKelas
            "
            )->row_array();
            return $walikelas;
        } catch (Exception $e) {
            // echo $e;
            return 'noData';
        }
    }
    // Menampilkan nama ketu tpq pada raport 
    function ketuaTpq()
    {
        $ketua = $this->db->query("
        select nama_ketua from ketua_tpq kt where status = 'ketua' 
        ")->row_array();
        return $ketua;
    }
    // $tahun = date("Y");
    //     $semester = M_guru::semester();


    function semester()
    {
        $tanggal = date('m');
        if ($tanggal <= 6) {
            return "Ganjil";
        } else {
            return "Genab";
        }
    }

    function totalSantriDiniah()
    {
        $semester = $this->semester();
        $tahun = date("Y");

        $idSantri = $this->db->query(
            "
            select distinct id_santri from nilai_diniah nd where semester = '$semester' and tgl_inp_nilai= '$tahun';
            "
        )->result_array();

        $idSantriCount = count($idSantri) - 1;

        return $idSantriCount;
    }

    function totalSantriUmmi()
    {
        $semester = $this->semester();
        $tahun = date("Y");

        $idSantri = $this->db->query(
            "
            select distinct id_santri from nilai_ummi where semester = '$semester' and tahun= '$tahun';
            "
        )->result_array();

        $idSantriCount = count($idSantri) - 1;

        return $idSantriCount;
    }

    function mprintRaportDiniah($idKelas)
    {



        $semester = $this->semester();
        $tahun = date("Y");

        $idSantri = $this->db->query(
            "
            select distinct id_santri from nilai_diniah nd where semester = '$semester' and tgl_inp_nilai= '$tahun';
            "
        )->result_array();

        $idSantriCount = count($idSantri) - 1;
        // print_r($idSantri);


        for ($arrayCount = 0; $arrayCount <= $idSantriCount; $arrayCount++) {


            $loopIdSantri = $idSantri[$arrayCount]['id_santri'];

            $waliKelas[] = $this->findWalikelas($loopIdSantri);

            $dataSantri[] = $this->db->query("
            SELECT * FROM kelas_santri_diniah 
INNER JOIN kelas ON kelas_santri_diniah.`id_kelas` = kelas.`id_kelas`
INNER JOIN santri ON kelas_santri_diniah.`id_santri` = santri.`id_santri`
WHERE santri.id_santri =$loopIdSantri
            ")->row_array();

            $nilaiRaport[] = $this->db->query(
                "
                SELECT nilai,detail_mapel, santri.id_santri,catatan FROM nilai_diniah INNER JOIN santri ON nilai_diniah.`id_santri` = santri.`id_santri`
    INNER JOIN detail_mapel ON nilai_diniah.`id_detail_mapel` = detail_mapel.`kd_detail_mapel` 
    WHERE semester ='$semester' AND tgl_inp_nilai=$tahun AND  nilai_diniah.`id_kelas`=$idKelas and santri.id_santri =$loopIdSantri order by detail_mapel
                "
            )->result_array();
        }
        // print_r($nilaiRaport);
        return ["dataSantri" => $dataSantri, "nilaiSantri" => $nilaiRaport, "waliKelas" => $waliKelas];
    }

    function mprintRaportUmmi($idKelas)
    {


        $semester = $this->semester();


        $tahun = date("Y");
        $idSantri = $this->db->query(
            "
        SELECT DISTINCT id_santri FROM nilai_ummi WHERE semester = '$semester' AND tahun= '$tahun';
        "
        )->result_array();

        $idSantriCount = count($idSantri) - 1;



        for ($arrayCount = 0; $arrayCount <= $idSantriCount; $arrayCount++) {


            $loopIdSantri = $idSantri[$arrayCount]['id_santri'];
            $waliKelas[] = $this->findWalikelas($loopIdSantri);
            $dataSantri[] = $this->db->query("
            SELECT * FROM kelas_santri_ummi 
            INNER JOIN santri ON kelas_santri_ummi.`id_santri` = santri.`id_santri`
            INNER JOIN kelas ON kelas_santri_ummi.`id_kelas` = kelas.`id_kelas`
            WHERE santri.id_santri=$loopIdSantri
            ")->row_array();

            $nilaiRaport[] = $this->db->query(

                "
            SELECT * FROM nilai_ummi WHERE semester = '$semester' AND tahun= '$tahun' AND id_kelas= $idKelas;
            "
            )->result_array();
        }
        return ["dataSantri" => $dataSantri, "nilaiSantri" => $nilaiRaport, "waliKelas" => $waliKelas];
    }
}
