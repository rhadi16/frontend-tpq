<?php 

class backpage_pengurus extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus/pengurus');
        $this->view('backpage/templates/footer');
    }

    public function tambah()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus/pengurus_tambah');
        $this->view('backpage/templates/footer');
    }

    public function all_qrcode()
    {
        $this->view('backpage/pengurus/qrcode_semua_pengurus');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus/pengurus_edit');
        $this->view('backpage/templates/footer');
    }

    public function detail()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus/pengurus_detail');
        $this->view('backpage/templates/footer');
    }

    public function gaji()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pengurus/pengurus_gaji');
        $this->view('backpage/templates/footer');
    }

}