<?php 

class backpage_pendaftaran extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pendaftaran');
        $this->view('backpage/templates/footer');
    }

}