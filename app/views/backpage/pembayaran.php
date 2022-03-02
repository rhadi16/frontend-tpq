<style type="text/css">
  .vc{
    font-size: 17px;
  }
  .btn-xs{
    padding: 5px;
    margin: 2px; 
  }
  @media only screen and (max-width: 768px) {
    #judul {
      font-size: 1.8rem;
    }
    .mbr-section-hero.mbr-after-navbar .mbr-section {
        padding-top: 20px;
    }
  }
  @media only screen and (max-width: 425px) {
    #judul {
      font-size: 1.3rem !important;
    }
    #judul2 {
      font-size: 1.2rem !important;
    }
  }
</style>


    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px; margin-bottom: unset;">PEMBAYARAN IURAN</h3>
                        
                        <form action="function/pembayaran_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">

                            <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1" style="height: unset;">
                                <div class="mbr-table-cell">
                                    <div class="container">
                                        <div class="row">

                                            <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important; padding-top: unset;">

                                                <a class="btn btn-lg btn-warning" onclick="history.go(-1);"><span class="fa fa-backward"></span> Kembali </a>
                                                <button class="btn btn-success" id="tambah-btn" type="button"><i class="fa fa-plus"></i> Tambah Pembayaran Iuran</button>


                                                <hr>

                                                <div id="tambah-view" style="display: none;">

                                                <input type="hidden" name="nist" value="<?php echo $nist; ?>">

                                                <input type="hidden" name="paraf" value="<?php echo $_SESSION['username_D1g1t4LTPQ']; ?>">


                                                <div class="mbr-section-text">
                                                    <div class='row'>

                                                        <div class="col-lg-2">
                                                            <div class="form-group">
                                                                Tahun
                                                                <select class="form-control" name="tahun">
                                                                  <option value="">Pilih Tahun..</option>
                                                                  <?php 
                                                                    $qry2 = "SELECT * FROM ref_tahun";

                                                                    $dt2 = mysqli_query($mysqli, $qry2);

                                                                    while($data2 = mysqli_fetch_array($dt2)){
                                                                   ?>
                                                                      <option value="<?php echo $data2['tahun']; ?>" <?php if(date('Y') == $data2['tahun']) {echo 'selected';} ?>><?php echo $data2['tahun']; ?> </option>
                                                                  <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <div class="form-group">
                                                                Bulan
                                                                <select class="form-control" name="bulan">
                                                                  <option selected>Pilih Bulan..</option>
                                                                  <?php 
                                                                    $qry2 = "SELECT * FROM ref_bulan";

                                                                    $dt2 = mysqli_query($mysqli, $qry2);

                                                                    while($data2 = mysqli_fetch_array($dt2)){
                                                                   ?>
                                                                      <option value="<?php echo $data2['alias']; ?>" <?php if(date('m') == $data2['alias']) {echo 'selected';} ?>><?php echo $data2['bulan']; ?></option>
                                                                  <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Tanggal Terima
                                                                <input type="date" class="form-control" name="tgl_terima" placeholder="Tanggal Terima.." required value="<?php echo date('Y-m-d'); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Nominal (Sesuai Komitmen Iuran Per Santri)
                                                                <input type="text" class="form-control" name="nominal" placeholder="Nominal.." required readonly value="<?php echo $d['komitmen_iuran']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mbr-section-text">                                    
                                                    <div class="row">
                                                        <div class="col-lg-12 text-xs-right">
                                                            <button type="submit" name="simpan" class="btn btn-lg btn-primary">Simpan&nbsp;<span class="fa fa-save"></span></button>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                        
                        <div class="mbr-section-nopadding">
                            

                            <h5 style="font-weight: bold;">Data Santri</h5>
                            <table class="gigo-responsive" style="margin-right: 10px; margin-top: 30px;">
                                <thead>
                                    <tr>
                                      <th scope="col">NIST</th>
                                      <th scope="col">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                <td data-label="Nist"><?php echo $d['nist']; ?></td>
                                <td data-label="Nama"><?php echo $d['nama']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>

                            <h5 style="font-weight: bold;">Pembayaran Iuran</h5>
                            

                            <table class="gigo-responsive" style="margin-right: 10px; margin-top: 30px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Tahun</th>
                                  <th scope="col">Bulan</th>
                                  <th scope="col">Nominal</th>
                                  <th scope="col">Diterima Oleh</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>

                              <tbody>
                              <?php
                                $no=1;

                                include('plugin/paginasi/main-paginasi.php');

                                while($data = mysqli_fetch_array($dt)){
                              ?>
                                <tr>
                                  <td data-label="No" scope="row" ><?php echo $no; ?></td>
                                  <td data-label="Tahun"><?php echo $data['tahun']; ?></td>
                                  <td data-label="Bulan"><?php echo $data['bulan']; ?></td>
                                  <td data-label="Nominal"><?php echo $data['nominal']; ?></td>
                                  <td data-label="Diterima Oleh"><?php echo $data['nama_penerima']; ?></td>

                                  <td data-label="Aksi">
                                    <a href="function/pembayaran_func.php?action=delete&nist=<?php echo $data['nist']; ?>&tahun=<?php echo $data['tahun']; ?>&bulan=<?php echo $data['bulan']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                  </td>
                                </tr>
                              <?php $no++; } ?>
                              
                              </tbody>

                            </table>
                            <?php include('plugin/paginasi/btn-paginasi.php'); ?>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<script type="text/javascript">

    $('.confirmation').on('click', function(e) {
       return confirm('Anda Yakin Menghapus Data Ini?');
    });


    $('#tambah-btn').on('click', function(e) {

       if( $('#tambah-btn').html() == '<i class="fa fa-plus"></i> Tambah Pembayaran Iuran' )
       {
          $('#tambah-view').show();
          $('#tambah-btn').html('<i class="fa fa-remove"></i> Batal Tambah Pembayaran Iuran');
          $('#tambah-btn').attr('class', 'btn btn-danger');
       }else{
          $('#tambah-view').hide();
          $('#tambah-btn').html('<i class="fa fa-plus"></i> Tambah Pembayaran Iuran');
          $('#tambah-btn').attr('class', 'btn btn-success');
       }

       e.PreventDefault();

    });

</script>