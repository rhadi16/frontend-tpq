<?php 

class backpage_referensi_hubungan_keluarga_edit extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/referensi_hubungan_keluarga_edit');
        $this->view('backpage/templates/footer');
    }

}