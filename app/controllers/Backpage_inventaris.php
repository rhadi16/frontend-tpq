<?php 

class backpage_inventaris extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/inventaris/inventaris');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/inventaris/inventaris_edit');
        $this->view('backpage/templates/footer');
    }

}