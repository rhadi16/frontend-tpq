<?php 

class backpage_referensi_sekolah extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_sekolah');
        $this->view('backpage/templates/footer');
    }

}