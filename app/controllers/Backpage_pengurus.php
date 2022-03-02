<?php 

class backpage_pengurus extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus');
        $this->view('backpage/templates/footer');
    }

}