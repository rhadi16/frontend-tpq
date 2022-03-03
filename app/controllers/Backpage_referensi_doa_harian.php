<?php 

class backpage_referensi_doa_harian extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_doa_harian/referensi_doa_harian');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_doa_harian/referensi_doa_harian_edit');
        $this->view('backpage/templates/footer');
    }

}