<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_partner extends CI_Model
{
    // cek apakah partner pernah submit profile
    function cek_id_partner()
    {
        $query = $this->db->query("SELECT MAX(id_partner) as partner_id from afm_partner");
        $hasil = $query->row();
        return $hasil->partner_id;
    }
    // cek submit file registrasi
    function submit_check($user_id)
    {
        // belum diverifikasi
        $wait_for_verified = $this->db->query("select id_partner,verified from afm_partner where user_id = '$user_id' && verified=0;")->result_array();
        // telah mengisi form menunggu verifikasi
        $has_verified = $this->db->query("select id_partner,verified from afm_partner where user_id = '$user_id' && verified=1;")->result_array();

        if (!empty($wait_for_verified)) {
            // echo "menunggu verifikasi";
            return "need_verifikasi";
        } else if ($has_verified) {
            // echo "telah diverifikasi";
            return 'has_verified';
        } else {
            // belum ferifikasi
            return  'fill_profile';
        }
    }
    // menampilkan profile partner yang telah diverifiksi
    function show_profile_partner($user_id)
    {
        $query = $this->db->query("SELECT * FROM `afm_partner` WHERE `user_id`='$user_id'")->result_array();
        return $query;
    }


    // mencari kode affiliate 
    function select_promotion_code()
    {
        $user_id = $this->session->userdata('user_id');

        $query = $this->db->get_where('afm_partner', array('user_id' => $user_id))->result_array();
        // return $query;

        $afm_partner_id = $query[0]['id_partner'];
        return $afm_partner_id;
    }
    // mencari traffic clik perbulan
    function traffic_per_mount()
    {
        $get_affiliate_id =  $this->db->get_where('afm_partner', array('user_id' => $this->session->userdata('user_id')))->result_array();
        $id_partner = $get_affiliate_id[0]['id_partner'];
        $year = date('Y');
        $januari = $this->db->query("SELECT COUNT(`id_traffic`) as januari from `traffic_promotion` WHERE month(`traffic_date`)=1 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $januari = $januari[0]['januari'];
        $februari = $this->db->query("SELECT COUNT(`id_traffic`) as februari from `traffic_promotion` WHERE month(`traffic_date`)=2 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $februari = $februari[0]['februari'];
        $maret = $this->db->query("SELECT COUNT(`id_traffic`) as maret from `traffic_promotion` WHERE month(`traffic_date`)=3 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $maret = $maret[0]['maret'];
        $april = $this->db->query("SELECT COUNT(`id_traffic`) as april from `traffic_promotion` WHERE month(`traffic_date`)=4 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $april = $april[0]['april'];
        $mei = $this->db->query("SELECT COUNT(`id_traffic`) as mei from `traffic_promotion` WHERE month(`traffic_date`)=5 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $mei = $mei[0]['mei'];
        $juni = $this->db->query("SELECT COUNT(`id_traffic`) as juni from `traffic_promotion` WHERE month(`traffic_date`)=6 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $juni = $juni[0]['juni'];
        $juli = $this->db->query("SELECT COUNT(`id_traffic`) as juli from `traffic_promotion` WHERE month(`traffic_date`)=7 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $juli = $juli[0]['juli'];
        $agustus = $this->db->query("SELECT COUNT(`id_traffic`) as agustus from `traffic_promotion` WHERE month(`traffic_date`)=8 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $agustus = $agustus[0]['agustus'];
        $september = $this->db->query("SELECT COUNT(`id_traffic`) as september from `traffic_promotion` WHERE month(`traffic_date`)=9 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $september = $september[0]['september'];
        $oktober = $this->db->query("SELECT COUNT(`id_traffic`) as oktober from `traffic_promotion` WHERE month(`traffic_date`)=10 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $oktober = $oktober[0]['oktober'];
        $november = $this->db->query("SELECT COUNT(`id_traffic`) as november from `traffic_promotion` WHERE month(`traffic_date`)=11 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $november = $november[0]['november'];
        $desember = $this->db->query("SELECT COUNT(`id_traffic`) as desember from `traffic_promotion` WHERE month(`traffic_date`)=12 AND YEAR(`traffic_date`)=$year AND`id_partner`='$id_partner';")->result_array();
        $desember = $desember[0]['desember'];
        $trafic_date = [
            'januari' => $januari,
            'februari' => $februari,
            'maret' => $maret,
            'april' => $april,
            'mei' => $mei,
            'juni' => $juni,
            'juli' => $juli,
            'agustus' => $agustus,
            'september' => $september,
            'oktober' => $oktober,
            'november' => $november,
            'desember' => $desember,
        ];
        return $trafic_date;
    }

    // list mahasiswa yang bisa diclaim oleh partner
    function konversi_calon_mhs($user_id)
    {
        $get_affiliate_id =  $this->db->get_where('afm_partner', array('user_id' => $user_id))->result_array();
        $id_partner = $get_affiliate_id[0]['id_partner'];
        $query = $this->db->query("select form_nama,form_provLahir,form_sma from afm_transaction_fee join afm_partner using(id_partner) join registrasi_mahasiswa using(id_mhs) where afm_partner.id_partner ='$id_partner' AND status!='lunas'")->result_array();
        return $query;
    }

    function total_fee()
    {
        // cari id partner
        $get_affiliate_id =  $this->db->get_where('afm_partner', array('user_id' => $this->session->userdata('user_id')))->result_array();
        $id_partner = $get_affiliate_id[0]['id_partner'];
        // return $id_partner;

        // total mahasiswa yang mendaftar 
        $total_refferal = $this->db->query("SELECT COUNT(id_partner) as total_fee FROM afm_transaction_fee WHERE id_partner='$id_partner' and status!='lunas' ")->result_array();
        $total_refferal = $total_refferal[0]['total_fee'];

        // return $total_refferal;



        // nominal fee sesuai kategori partner 
        $fee_partner = $this->db->query("SELECT fee,jenis_partner FROM afm_partner JOIN partner_fee USING(id_partner_fee) WHERE id_partner= '$id_partner' ")->result_array();

        $kategori_partner = $fee_partner[0]['jenis_partner'];



        if ($kategori_partner == 'guru') {
            // return siswa x fee kategori
            if ($total_refferal < 10) {
                $all_fee = $total_refferal * $fee_partner[0]['fee'];
            } elseif ($total_refferal > 10) {
                $all_fee = $total_refferal * 500000;
            }
        } else {
            $all_fee = $total_refferal * $fee_partner[0]['fee'];
        }


        // total nominal, id partner, total siswa
        $fee = [$all_fee, $id_partner, $total_refferal];
        return $fee;
    }
    function payout_history()
    {
        // cari id partner
        $get_affiliate_id =  $this->db->get_where('afm_partner', array('user_id' => $this->session->userdata('user_id')))->result_array();
        $id_partner = $get_affiliate_id[0]['id_partner'];
        // return $id_partner;
        $query = $this->db->query("select * from nota_afm_partner where id_partner='$id_partner' and upload_transfer is not null")->result_array();
        return $query;
    }
}
