<?php 

class backpage_ijin_pengajar_view extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/ijin_pengajar/ijin_pengajar_view');
        $this->view('backpage/templates/footer');
    }

}