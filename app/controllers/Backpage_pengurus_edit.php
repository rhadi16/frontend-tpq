<?php 

class backpage_pengurus_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus_edit');
        $this->view('backpage/templates/footer');
    }

}