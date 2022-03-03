<?php 

class backpage_scan_or_manual_view extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/scan/scan_or_manual_view');
        $this->view('backpage/templates/footer');
    }

    public function scan()
    {
        $this->view('backpage/scan/scan');
    }

}