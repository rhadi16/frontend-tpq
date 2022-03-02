<?php 

class backpage_referensi_surah_pendek extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_surah_pendek');
        $this->view('backpage/templates/footer');
    }

}