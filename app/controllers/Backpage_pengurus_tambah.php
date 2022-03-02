<?php 

class backpage_pengurus_tambah extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus_tambah');
        $this->view('backpage/templates/footer');
    }

}