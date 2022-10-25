<?php 

function CekWalikelas(){
    $CI =& get_instance();
    

    $walikelas = $this->db->query(
        "
        select Nama namaGuru, Kelas, kg.id_guru  from kelas_guru kg
inner join guru g  on kg.id_guru = g.id_guru 
inner join kelas k on kg.id_kelas = k.id_kelas 
where walikelas is not null and kg.id_guru =3 
        "
    )->result_array();

    return $walikelas;

}