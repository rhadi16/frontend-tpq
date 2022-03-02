<?php 

class backpage_tambah_pendaftaran extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pendaftaran_tambah');
        $this->view('backpage/templates/footer');
    }

}