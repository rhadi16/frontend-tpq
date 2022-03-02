<?php 

class backpage_pengurus_gaji extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus_gaji');
        $this->view('backpage/templates/footer');
    }

}