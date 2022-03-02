<?php 

class backpage_referensi_bulan_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_bulan_edit');
        $this->view('backpage/templates/footer');
    }

}