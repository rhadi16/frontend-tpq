<?php 

class backpage_referensi_devisi extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_devisi');
        $this->view('backpage/templates/footer');
    }

}