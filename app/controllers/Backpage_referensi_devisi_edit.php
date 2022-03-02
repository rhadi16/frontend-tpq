<?php 

class backpage_referensi_devisi_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_devisi_edit');
        $this->view('backpage/templates/footer');
    }

}