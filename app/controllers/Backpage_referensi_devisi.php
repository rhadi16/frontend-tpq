<?php 

class backpage_referensi_devisi extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_devisi/referensi_devisi');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_devisi/referensi_devisi_edit');
        $this->view('backpage/templates/footer');
    }

}