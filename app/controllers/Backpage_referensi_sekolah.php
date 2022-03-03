<?php 

class backpage_referensi_sekolah extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_sekolah/referensi_sekolah');
        $this->view('backpage/templates/footer');

    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_sekolah/referensi_sekolah_edit');
        $this->view('backpage/templates/footer');
    }

}