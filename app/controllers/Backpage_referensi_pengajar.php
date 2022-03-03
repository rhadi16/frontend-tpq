<?php 

class backpage_referensi_pengajar extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_pengajar/referensi_pengajar');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_pengajar/referensi_pengajar_edit');
        $this->view('backpage/templates/footer');
    }

}