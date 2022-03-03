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
      width: 80%;
    }
  }
  @media only screen and (max-width: 1024px) {
    .card-data {
      width: 80%;
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

<?php 
  $nama_nis = explode('||', $_GET['p']);
?>

<div class="container">
  <div class="card-data">
    

   <!--  

   <div class="menu">

      <div class="bacaan-sholat">
        <a class="btn btn-secondary btn-xs">Rekap Kehadiran Santri</a>
      </div>
      
      <div class="doa-harian">
        <a class="btn btn-warning btn-xs">Rekap Kahadiran Pengurus</a>  
      </div>
      
      <div class="surah-pendek">
        <a class="btn btn-primary btn-xs">Laporan Keuangan</a>  
      </div>
      <div class="riwayat-bacaan">
        <a class="btn btn-xs" style="background-color: #afb42b; color: #fff;">Laporan Evaluasi Internal</a>
      </div>
      <div class="pembayaran">
        <a class="btn btn-xs" style="background-color: #ef6c00; color: #fff;">Laporan Iuran Santri</a>
      </div>
      <div class="detail-santri">
        <a ><a class="btn btn-success btn-xs">Laporan Resmi Santri</a></a>
      </div> 
    
    </div>-->

    <h4 style="font-weight: bold;padding-bottom: 20px;">Halaman Staf Rekap</h4>

                                            <form action="rekap/index.php" method="post">

                                                <div class="mbr-section-text">
                                                    <div class='row'>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Pilih Rekap / Laporan
                                                                <select class="form-control" name="lap_rekap" id="lap_rekap">
                                                                  <option value="">- Pilih Rekap / Laporan -</option>
                                                                  <option value="1">Rekap Kehadiran Santri</option>
                                                                  <option value="2">Rekap Kehadiran Pengurus</option>
                                                                  <option value="5">Rekap Iuran Santri</option>
                                                                  <option value="7">Rekap Gaji Pengurus/Pengajar</option>
                                                                  <option value="3">Laporan Keuangan</option>
                                                                  <option value="4">Laporan Evaluasi Internal</option>
                                                                  <option value="6">Laporan Resmi Santri</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-4" style="display: none;" id="santri-tampil">
                                                            <div class="form-group">
                                                                Santri
                                                                <select class="form-control" name="santri">
                                                                  <option value="">- Pilih Santri -</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <div class="form-group">
                                                                Tahun
                                                                <select class="form-control" name="tahun">
                                                                  <option value="">- Pilih Tahun -</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2" id="bulan-tampil">
                                                            <div class="form-group">
                                                                Bulan
                                                                <select class="form-control" name="bulan">
                                                                  <option value="">- Pilih Bulan -</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <button type="submit" name="simpan" class="btn btn-lg btn-primary"><span class="fa fa-print"></span> Cetak</button>
                                                        </div>

                                                    </div>
                                                </div>
                      </form>

  </div>

</div>


<script type="text/javascript">
  $('#lap_rekap').on('change', function (e) {
    
    if($('#lap_rekap').val() == '6')
    {
      $('#santri-tampil').show();
      $('#bulan-tampil').show();
    }
    else if($('#lap_rekap').val() == '5' || $('#lap_rekap').val() == '7')
    {
      $('#santri-tampil').hide();
      $('#bulan-tampil').hide();
    }else
    {
      $('#santri-tampil').hide();
      $('#bulan-tampil').show();
    }

  });
</script>