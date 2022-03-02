<?php 

class backpage_referensi_sekolah_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_sekolah_edit');
        $this->view('backpage/templates/footer');
    }

}