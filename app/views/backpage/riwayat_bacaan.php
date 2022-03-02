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
      font-size: 1.4rem !important;
    }
  }
</style>


    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px; margin-bottom: unset;">RIWAYAT BACAAN</h3>
                        
                        <form action="function/riwayat_bacaan_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">

                            <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1" style="height: unset;">
                                <div class="mbr-table-cell">
                                    <div class="container">
                                        <div class="row">

                                            <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important; padding-top: unset;">
                                                
                                                <a class="btn btn-lg btn-warning" onclick="history.go(-1);"><span class="fa fa-backward"></span> Kembali </a>
                                                <button class="btn btn-success" id="tambah-btn" type="button"><i class="fa fa-plus"></i> Tambah Riwayat Bacaan</button>

                                                <hr>

                                                <div id="tambah-view" style="display: none;">


                                                <input type="hidden" name="nist" value="<?php echo $nist; ?>">

                                                <input type="hidden" name="id_ref_pengajar" value="<?php echo $_SESSION['username_D1g1t4LTPQ']; ?>">



                                                <div class="mbr-section-text">
                                                    <div class='row'>
                                                        
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Tanggal
                                                                <input type="date" class="form-control" name="tgl" placeholder="Tanggal.." required value="<?php echo date('Y-m-d'); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Surah (Alquran) / Jilid (Iqro')
                                                                <input type="text" class="form-control" name="surah" placeholder="Surah (Alquran) / Jilid (Iqro')" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Ayat (Alquran)  / Halaman (Iqro')
                                                                <input type="number" class="form-control" name="ayat" placeholder="Ayat (Alquran)  / Halaman (Iqro')" required>
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

                                                </div> <!-- end tambah -->

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

                            <h5 style="font-weight: bold;">Riwayat Bacaan</h5>
                            <table class="gigo-responsive" style="margin-right: 10px; margin-top: 30px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Tanggal</th>
                                  <th scope="col">Surah</th>
                                  <th scope="col">Ayat</th>
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
                                  <td data-label="Tanggal"><?php echo datetimeFormat::TanggalIndo($data['tgl']); ?></td>
                                  <td data-label="Surah"><?php echo $data['surah']; ?></td>
                                  <td data-label="Ayat"><?php echo $data['ayat']; ?></td>

                                  <td data-label="Aksi">
                                    <a href="function/riwayat_bacaan_func.php?action=delete&id=<?php echo $data['id']; ?>&nist=<?php echo $data['nist']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
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

       if( $('#tambah-btn').html() == '<i class="fa fa-plus"></i> Tambah Riwayat Bacaan' )
       {
          $('#tambah-view').show();
          $('#tambah-btn').html('<i class="fa fa-remove"></i> Batal Tambah Riwayat Bacaan');
          $('#tambah-btn').attr('class', 'btn btn-danger');
       }else{
          $('#tambah-view').hide();
          $('#tambah-btn').html('<i class="fa fa-plus"></i> Tambah Riwayat Bacaan');
          $('#tambah-btn').attr('class', 'btn btn-success');
       }

       e.PreventDefault();

    });

</script>