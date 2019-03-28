<?php
//periksa apakah datanya array atau hanya 0
$query = $this->db->query('SELECT nama,asal_sekolah FROM pendaftaran order by nama ASC');
foreach ($query->result_array() as $row)
{
        echo $row['nama'];
   
        echo $row['asal_sekolah']; 

        print "<br>";
}
 
 ?>