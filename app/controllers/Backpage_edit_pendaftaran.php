<?php 

class backpage_edit_pendaftaran extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pendaftaran_edit');
        $this->view('backpage/templates/footer');
    }

}