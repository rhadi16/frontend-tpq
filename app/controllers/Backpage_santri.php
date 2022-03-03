<?php 

class backpage_santri extends Controller {

    public function index()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri/santri_view');
        $this->view('backpage/templates/footer');
    }

    public function edit()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri/santri_edit');
        $this->view('backpage/templates/footer');
    }

    public function all_qrcode()
    {
        $this->view('backpage/santri/qrcode_semua_santri');
    }

    public function detail()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri/santri_detail');
        $this->view('backpage/templates/footer');
    }

    public function cetak()
    {
        $this->view('backpage/santri/santri_cetak');
    }

    public function bacaan_sholat()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri/hafalan_bacaan_sholat_santri');
        $this->view('backpage/templates/footer');
    }

    public function doa_harian()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri/hafalan_doa_harian_santri');
        $this->view('backpage/templates/footer');
    }

    public function surah_pendek()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri/hafalan_surah_pendek_santri');
        $this->view('backpage/templates/footer');
    }

    public function riwayat_bacaan()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri/riwayat_bacaan');
        $this->view('backpage/templates/footer');
    }

    public function pembayaran()
    {
        $this->view('backpage/templates/header');
        $this->view('backpage/santri/pembayaran');
        $this->view('backpage/templates/footer');
    }

}