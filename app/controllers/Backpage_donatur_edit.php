<?php 

class backpage_donatur_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/donatur_edit');
        $this->view('backpage/templates/footer');
    }

}