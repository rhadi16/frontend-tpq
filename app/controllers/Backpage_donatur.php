<?php 

class backpage_donatur extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/donatur/donatur');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/donatur/donatur_edit');
        $this->view('backpage/templates/footer');
    }

}