<?php 

class backpage_referensi_surah_pendek extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_surah_pendek/referensi_surah_pendek');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_surah_pendek/referensi_surah_pendek_edit');
        $this->view('backpage/templates/footer');
    }

}