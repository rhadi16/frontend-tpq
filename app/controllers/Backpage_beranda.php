<?php 

class backpage_beranda extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/index');
        $this->view('backpage/templates/footer');
    }

}




