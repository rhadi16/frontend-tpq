<?php 

class backpage_referensi_kelas extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_kelas/referensi_kelas');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_kelas/referensi_kelas_edit');
        $this->view('backpage/templates/footer');
    }

}