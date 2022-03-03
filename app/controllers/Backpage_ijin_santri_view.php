<?php 

class backpage_ijin_santri_view extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ijin_santri/ijin_santri_view');
        $this->view('backpage/templates/footer');
    }

}