<?php 

class backpage_referensi_bacaan_sholat extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_bacaan_sholat');
        $this->view('backpage/templates/footer');
    }

}