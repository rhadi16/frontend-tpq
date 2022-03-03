<?php 

class backpage_referensi_hubungan_keluarga extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_hubungan_keluarga/referensi_hubungan_keluarga');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ref_hubungan_keluarga/referensi_hubungan_keluarga_edit');
        $this->view('backpage/templates/footer');
    }

}