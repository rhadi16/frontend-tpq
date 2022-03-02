<?php 

class backpage_hafalan_doa_harian_santri extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/hafalan_doa_harian_santri');
        $this->view('backpage/templates/footer');
    }

}