<?php
class Search extends CI_Controller{

    public function cari{
        $this->load->model(Carimodel);
        $data['v_cari'] = $this->Carimodel->List_cari();
        $this->load->view('v_cari',$data);
    }
}


?>