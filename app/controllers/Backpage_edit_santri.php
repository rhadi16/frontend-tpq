<?php 

class backpage_edit_santri extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri_edit');
        $this->view('backpage/templates/footer');
    }

}