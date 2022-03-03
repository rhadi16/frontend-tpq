<?php 

class backpage_referensi_jabatan extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_jabatan/referensi_jabatan');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_jabatan/referensi_jabatan_edit');
        $this->view('backpage/templates/footer');
    }

}