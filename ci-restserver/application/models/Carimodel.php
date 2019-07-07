<?php
class Carimodel extends CI_Model
{
    function __construct()
	{
		
	}
    function list_cari(){

        $query = $this->db->query('SELECT nama,asal_sekolah FROM pendaftaran order by nama ASC');
		//lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			//Mengirimkan data array hasil query
			return $query->result();
			//Function result() hampir sama dengan function mysql_fetch_array()
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}
    }
    
}




?>