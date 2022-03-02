<?php 

class backpage_donatur extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/donatur');
        $this->view('backpage/templates/footer');
    }

}