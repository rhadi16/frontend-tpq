<?php 

class backpage_referensi_tahun extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_tahun/referensi_tahun');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_tahun/referensi_tahun_edit');
        $this->view('backpage/templates/footer');
    }

}