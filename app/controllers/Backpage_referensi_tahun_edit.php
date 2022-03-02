<?php 

class backpage_referensi_tahun_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_tahun_edit');
        $this->view('backpage/templates/footer');
    }

}