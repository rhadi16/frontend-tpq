<?php 

class backpage_pendaftaran extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pendaftaran/pendaftaran');
        $this->view('backpage/templates/footer');
    }

    public function tambah()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pendaftaran/pendaftaran_tambah');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pendaftaran/pendaftaran_edit');
        $this->view('backpage/templates/footer');
    }

    public function detail()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pendaftaran/pendaftaran_detail');
        $this->view('backpage/templates/footer');
    }

    public function cetak()
    {
        $this->view('backpage/pendaftaran/pendaftaran_cetak');
    }

}