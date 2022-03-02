<?php 

class backpage_referensi_pengajar extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_pengajar');
        $this->view('backpage/templates/footer');
    }

}