<?php 

class backpage_pembayaran extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/pembayaran');
        $this->view('backpage/templates/footer');
    }

}