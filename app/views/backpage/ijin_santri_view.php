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
  .col-xs-12 .btn {
    padding: 5px 10px;
  }
</style>


    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px; margin-bottom: 10px;">KELOLA IJIN & SAKIT SANTRI</h3>
                        
                        <div class="row">

                          <div class="col-xs-12">
                            <a href="<?php BASEURL; ?>backpage_ijin_santri_view" class="btn btn-md btn-primary">
                              Santri
                            </a>
                            <a href="<?php BASEURL; ?>backpage_ijin_pengajar_view" class="btn btn-md btn-info-outline">
                              Pengajar
                            </a>
                          </div>

                        </div>

                        <form action="function/ijin_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">

                            <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1" style="height: unset;">
                                <div class="mbr-table-cell">
                                    <div class="container">
                                        <div class="row">

                                            <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important; padding-top: unset;">
                                                
                                                <a class="btn btn-lg btn-warning" onclick="history.go(-1);"><span class="fa fa-backward"></span> Kembali </a>
                                                <button class="btn btn-success" id="tambah-btn" type="button"><i class="fa fa-plus"></i> Tambah Ijin/Sakit Santri</button>

                                                <hr>

                                                <div id="tambah-view" style="display: none;">

                                                <div class="mbr-section-text">
                                                    <div class='row'>

                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                Pilih Santri
                                                                <select name="no_identitas" class="form-control">
                                                                    <option value="">- Pilih -</option> 
                                                                    <?php 
                                                                    $qry1 = "SELECT * FROM tb_santri where sts_aktif = 1";

                                                                    $dt1 = mysqli_query($mysqli, $qry1);

                                                                    while($data1 = mysqli_fetch_array($dt1)){
                                                                   ?>
                                                                      <option value="<?php echo $data1['nist'].'-'.$data1['nama']; ?>"><?php echo $data1['nist'].' - '.$data1['nama']; ?></option>
                                                                  <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                Tanggal Ijin/Sakit
                                                                <input type="date" class="form-control" name="tgl" placeholder="Tanggal Ijin/Sakit.." required value="<?php echo date('Y-m-d'); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                Jenis Ijin
                                                                <select name="jenis_ijin" class="form-control">
                                                                    <option value="">- Pilih -</option>
                                                                    <option value="IJIN">IJIN</option>
                                                                    <option value="SAKIT">SAKIT</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                Keterangan
                                                                <input type="text" name="ket" value="-" class="form-control">
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
                            
                            <span style="margin: 10px;"><?php include('plugin/paginasi/form-pencarian.php'); ?></span>
                            <table class="gigo-responsive" style="margin-right: 10px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Data Santri</th>
                                  <th scope="col">Tanggal</th>
                                  <th scope="col">Jenis Ijin</th>
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
                                  <td data-label="Data Santri"><?php echo $data['nama'].'<br>'.$data['no_identitas']; ?></td>
                                  <td data-label="Tanggal"><?php echo $data['tgl']; ?></td>
                                  <td data-label="Jenis Ijin"><?php echo $data['jenis_ijin'].'<br>(Ket: '.$data['ket'].')'; ?></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="function/ijin_func.php?action=delete&id=<?php echo $data['id']; ?>&no=<?php echo $data['no_identitas']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
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

       if( $('#tambah-btn').html() == '<i class="fa fa-plus"></i> Tambah Ijin/Sakit Santri' )
       {
          $('#tambah-view').show();
          $('#tambah-btn').html('<i class="fa fa-remove"></i> Batal Tambah Ijin/Sakit Santri');
          $('#tambah-btn').attr('class', 'btn btn-danger');
       }else{
          $('#tambah-view').hide();
          $('#tambah-btn').html('<i class="fa fa-plus"></i> Tambah Ijin/Sakit Santri');
          $('#tambah-btn').attr('class', 'btn btn-success');
       }

       e.PreventDefault();

    });

</script>