<?php 

class backpage_referensi_jabatan extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_jabatan');
        $this->view('backpage/templates/footer');
    }

}