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
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px; margin-bottom: unset;">HAFALAN DOA HARIAN</h3>
                        
                        <form action="function/doa_harian_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">

                            <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1" style="height: unset;">
                                <div class="mbr-table-cell">
                                    <div class="container">
                                        <div class="row">

                                            <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important; padding-top: unset;">

                                                <a class="btn btn-lg btn-warning" onclick="history.go(-1);"><span class="fa fa-backward"></span> Kembali </a>
                                                <button class="btn btn-success" id="tambah-btn" type="button"><i class="fa fa-plus"></i> Tambah Hafalan Doa Harian</button>

                                                <hr>


                                                <div id="tambah-view" style="display: none;">


                                                <input type="hidden" name="nist" value="<?php echo $nist; ?>">

                                                <input type="hidden" name="paraf_1" value="<?php echo $_SESSION['username_D1g1t4LTPQ']; ?>">

                                                <div class="mbr-section-text">
                                                    <div class='row'>
                                                       
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Hafalan Doa Harian
                                                                <select class="form-control" name="id_hafalan_doa_harian">
                                                                  <option selected>Pilih Hafalan Doa Harian..</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Tanggal
                                                                <input type="date" class="form-control" name="tgl_1" placeholder="Tanggal.." required value="<?php echo date('Y-m-d'); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Keterangan 
                                                                <input type="text" class="form-control" name="ket_1" placeholder="Keterangan.." value="-" required>
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
                                <td data-label="Nist"></td>
                                <td data-label="Nama"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>

                            <h5 style="font-weight: bold;">Hafalan Doa Harian</h5>
                            

                            <table class="gigo-responsive" style="margin-right: 10px; margin-top: 30px">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Materi Hafalan</th>
                                  <th scope="col">Tanggal</th>
                                  <th scope="col">Penyimak</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td data-label="No" scope="row" ></td>
                                  <td data-label="Materi Hafalan"><br> Ket: </td>
                                  <td data-label="Tanggal"></td>
                                  <td data-label="Penyimak"></td>

                                  <td data-label="Aksi">
                                    <a href="function/doa_harian_func.php" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                  </td>
                                </tr>
                              </tbody>

                            </table>
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

       if( $('#tambah-btn').html() == '<i class="fa fa-plus"></i> Tambah Hafalan Doa Harian' )
       {
          $('#tambah-view').show();
          $('#tambah-btn').html('<i class="fa fa-remove"></i> Batal Tambah Hafalan Doa Harian');
          $('#tambah-btn').attr('class', 'btn btn-danger');
       }else{
          $('#tambah-view').hide();
          $('#tambah-btn').html('<i class="fa fa-plus"></i> Tambah Hafalan Doa Harian');
          $('#tambah-btn').attr('class', 'btn btn-success');
       }

       e.PreventDefault();

    });

</script>