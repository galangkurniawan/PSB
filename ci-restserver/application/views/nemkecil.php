<?php
//periksa apakah datanya array atau hanya 0
$query = $this->db->query('SELECT nem FROM pendaftaran order by nem ASC limit 1');
 
foreach ($query->result_array() as $row) {
    # code...
    $tgl=date('d-m-Y');
    echo "nem kecil tanggal $tgl ialah : ";
    echo $row['nem'];
}

 ?>