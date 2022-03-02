<?php 

class backpage_inventaris extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/inventaris');
        $this->view('backpage/templates/footer');
    }

}