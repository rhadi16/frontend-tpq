<?php 

class Home extends Controller {
    public function index()
    {
        $this->view('frontpage/templates/header');
        $this->view('frontpage/index');
        $this->view('frontpage/templates/footer');
    }

    public function form_daftar()
    {
        $this->view('frontpage/form_daftar');
    }
}