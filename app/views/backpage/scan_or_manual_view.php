<style type="text/css">
  .vc{
    font-size: 17px;
  }
  .btn-xs{
    padding: 5px;
    margin: 2px; 
  }

  @media only screen and (max-width: 1440px) {
    .card-data {
      width: 40%;
    }
  }
  @media only screen and (max-width: 1024px) {
    .card-data {
      width: 40%;
    }
  }
  @media only screen and (max-width: 768px) {
    .card-data {
      width: 50%;
    }
  }
  @media only screen and (max-width: 425px) {
    .card-data {
      width: 100%;
    }
  }
  .card-data {
    background-color: #fff;
    padding: 30px;
    margin: 100px auto 20px;
    border-radius: 10px;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
  }
  .card-data .header {
    display: flex;
    align-items: center;
    padding-left: 20px;
  }
  .card-data .header .image {
    width: 25%;
  }
  .card-data .header .nama-nist {
    width: 75%;
    text-align: center;
    padding-left: 10px;
  }
  .card-data .header .nama-nist h5 {
    font-size: 1.05rem;
  }

  .card-data .absen {
    display: flex;
    justify-content: space-between;
    padding: 15px 0;
    text-align: center;
  }
  .card-data .absen .left-absen,
  .card-data .absen .right-absen {
    width: 50%;
    padding: 0 15px;
  }
  .card-data .absen .absen-masuk,
  .card-data .absen .absen-keluar {
    padding: 5px;
    border-radius: 5px;
    background-color: #1976d2;
    color: #fff;
  }
  .card-data .absen .absen-keluar {
    background-color: #c62828;
  }

  .card-data .menu {
    text-align: center;
  }
  .card-data .menu a {
    margin-bottom: 10px;
    width: 90%;
    padding: 10px 0;
  }
</style>

<div class="container">
  <div class="card-data">
    
    <div class="menu">
      <div class="scan-absen-masuk">
        <a class="btn btn-warning btn-xs" href="<?php BASEURL; ?>backpage_scan"><i class="fa fa-backward"></i> SCAN ABSEN MASUK</a>  
      </div>
      <div class="scan-absen-pulang">
        <a class="btn btn-primary btn-xs" href="<?php BASEURL; ?>backpage_scan"><i class="fa fa-forward"></i> SCAN ABSEN PULANG</a>  
      </div>

      <br>

      <div class="riwayat-bacaan">
        <a class="btn btn-danger btn-xs" href="<?php BASEURL; ?>backpage_scan"> <i class="fa fa-book"></i> RIWAYAT BACAAN</a>
      </div>
      
      <br>

      <div class="hafalan-bacaan-sholat">
        <a class="btn btn-secondary btn-xs" href="<?php BASEURL; ?>backpage_scan"> <i class="fa fa-user"></i> HAFALAN BACAAN SHOLAT</a>
      </div>
      <div class="hafalan-doa-harian">
        <a class="btn btn-warning btn-xs" href="<?php BASEURL; ?>backpage_scan"> <i class="fa fa-user"></i> HAFALAN DOA HARIAN</a>  
      </div>
      <div class="hafalan-surah-pendek">
        <a class="btn btn-primary btn-xs" href="<?php BASEURL; ?>backpage_scan"> <i class="fa fa-user"></i> HAFALAN SURAH PENDEK</a>  
      </div>

      <br>

      <div class="bacaan-sholat">
        <a class="btn btn-danger btn-xs" href="<?php BASEURL; ?>backpage_scan"> <i class="fa fa-money"></i> PEMBAYARAN IURAN</a>
      </div>

      <div class="detail-santri">
        <a ><a class="btn btn-success btn-xs" href="<?php BASEURL; ?>backpage_scan"> <i class="fa fa-info"></i> DETAIL SANTRI</a></a>
      </div>

    </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  $('.confirmation').on('click', function(e) {
    return confirm('Anda Yakin Menghapus Data Ini?');
  });
</script>