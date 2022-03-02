<?php 

class backpage_referensi_kelas_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_kelas_edit');
        $this->view('backpage/templates/footer');
    }

}