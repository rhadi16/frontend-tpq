<?php 

class backpage_scan_or_manual_view extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/scan_or_manual_view');
        $this->view('backpage/templates/footer');
    }

}