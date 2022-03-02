<?php 

class backpage_referensi_jabatan_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_jabatan_edit');
        $this->view('backpage/templates/footer');
    }

}