<?php 

class backpage_rekap_view extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/rekap/rekap_view');
        $this->view('backpage/templates/footer');
    }

}