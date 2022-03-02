<?php 

class backpage_detail_santri extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri_detail');
        $this->view('backpage/templates/footer');
    }

}