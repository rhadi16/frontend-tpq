<?php 

class backpage_referensi_bulan extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_bulan/referensi_bulan');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_bulan/referensi_bulan_edit');
        $this->view('backpage/templates/footer');
    }

}