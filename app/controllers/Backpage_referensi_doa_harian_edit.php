<?php 

class backpage_referensi_doa_harian_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_doa_harian_edit');
        $this->view('backpage/templates/footer');
    }

}