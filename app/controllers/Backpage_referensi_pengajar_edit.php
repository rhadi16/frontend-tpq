<?php 

class backpage_referensi_pengajar_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_pengajar_edit');
        $this->view('backpage/templates/footer');
    }

}