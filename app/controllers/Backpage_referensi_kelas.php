<?php 

class backpage_referensi_kelas extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_kelas');
        $this->view('backpage/templates/footer');
    }

}