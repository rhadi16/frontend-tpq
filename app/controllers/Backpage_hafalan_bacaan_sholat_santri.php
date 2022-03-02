<?php 

class backpage_hafalan_bacaan_sholat_santri extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/hafalan_bacaan_sholat_santri');
        $this->view('backpage/templates/footer');
    }

}