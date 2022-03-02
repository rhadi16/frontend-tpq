<?php 

class backpage_referensi_bulan extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_bulan');
        $this->view('backpage/templates/footer');
    }

}