<?php 

class backpage_riwayat_bacaan extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/riwayat_bacaan');
        $this->view('backpage/templates/footer');
    }

}