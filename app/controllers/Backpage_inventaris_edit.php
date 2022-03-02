<?php 

class backpage_inventaris_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/inventaris_edit');
        $this->view('backpage/templates/footer');
    }

}