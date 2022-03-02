<?php 

class backpage_santri extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri_view');
        $this->view('backpage/templates/footer');
    }

}