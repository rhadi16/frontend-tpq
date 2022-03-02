<?php 

class backpage_referensi_bacaan_sholat_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_bacaan_sholat_edit');
        $this->view('backpage/templates/footer');
    }

}