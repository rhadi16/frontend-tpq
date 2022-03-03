<?php 

class backpage_referensi_libur extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_libur/referensi_libur');
        $this->view('backpage/templates/footer');
    }

}