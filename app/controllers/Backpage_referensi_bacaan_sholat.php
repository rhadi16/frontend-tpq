<?php 

class backpage_referensi_bacaan_sholat extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_bacaan_sholat/referensi_bacaan_sholat');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_bacaan_sholat/referensi_bacaan_sholat_edit');
        $this->view('backpage/templates/footer');
    }

}