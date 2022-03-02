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
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px; margin-bottom: unset;">TAMPIL DATA GAJI PENGURUS</h3>
                        
                        <form action="function/pengurus_gaji_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">

                            <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1" style="height: unset;">
                                <div class="mbr-table-cell">
                                    <div class="container">
                                        <div class="row">

                                            <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important; padding-top: unset;">

                                                <a class="btn btn-lg btn-warning" onclick="history.go(-1);"><span class="fa fa-backward"></span> Kembali </a>
                                                <button class="btn btn-success" id="tambah-btn" type="button"><i class="fa fa-plus"></i> Tambah Data Gaji Pengajar</button>


                                                <hr>


                                                <div id="tambah-view" style="display: none;">

                                                <input type="hidden" name="nipg" value="<?php echo $nipg; ?>">

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
                                                                <input type="date" class="form-control" name="tgl_gajian" placeholder="Tanggal Terima.." required value="<?php echo date('Y-m-d'); ?>">
                                                            </div>
                                                        </div>                                                        

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Total Gaji
                                                                <input type="number" class="form-control" name="total" placeholder="Total Gaji.." required>
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

                                            </div> <!-- end tambah view -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                        
                        <div class="mbr-section-nopadding">

                            <?php

                                include('plugin/paginasi/main-paginasi.php');
                                $d = mysqli_fetch_array($dt);

                            ?>
                            <h5 style="font-weight: bold;">Data Pengajar</h5>
                            <table class="gigo-responsive" style="margin-right: 10px; margin-top: 30px;">
                                <thead>
                                    <tr>
                                      <th scope="col">NIPG</th>
                                      <th scope="col">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                  <td data-label="NIPG"><?php echo $d['nipg']; ?></td>
                                  <td data-label="Nama"><?php echo $d['nama']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>

                            <h5 style="font-weight: bold;">Data Gaji</h5>
                            
                            <table class="gigo-responsive" style="margin-right: 10px; margin-top: 30px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Periode Gaji</th>
                                  <th scope="col">Total</th>
                                  <th scope="col">Tanggal Terima</th>
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
                                  <td data-label="Periode Gaji"><?php echo $data['nama_bulan']; ?> <?php echo $data['tahun']; ?></td>
                                  <td data-label="Total"><?php echo $data['total']; ?></td>
                                  <td data-label="Tanggal Terima"><?php echo datetimeFormat::TanggalIndo($data['tgl']); ?></td>

                                  <td data-label="Aksi">
                                    <a href="function/pengurus_gaji_func.php?action=delete&nipg=<?php echo $data['nipg']; ?>&tgl=<?php echo $data['tgl']; ?>&bulan=<?php echo $data['bulan']; ?>&tahun=<?php echo $data['tahun']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
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

       if( $('#tambah-btn').html() == '<i class="fa fa-plus"></i> Tambah Data Gaji Pengajar' )
       {
          $('#tambah-view').show();
          $('#tambah-btn').html('<i class="fa fa-remove"></i> Batal Tambah Data Gaji Pengajar');
          $('#tambah-btn').attr('class', 'btn btn-danger');
       }else{
          $('#tambah-view').hide();
          $('#tambah-btn').html('<i class="fa fa-plus"></i> Tambah Data Gaji Pengajar');
          $('#tambah-btn').attr('class', 'btn btn-success');
       }

       e.PreventDefault();

    });

</script>