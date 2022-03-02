<?php 

class backpage_detail_pendaftaran extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pendaftaran_detail');
        $this->view('backpage/templates/footer');
    }

}