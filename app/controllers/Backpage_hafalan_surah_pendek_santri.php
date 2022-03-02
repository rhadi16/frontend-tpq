<?php 

class backpage_hafalan_surah_pendek_santri extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/hafalan_surah_pendek_santri');
        $this->view('backpage/templates/footer');
    }

}