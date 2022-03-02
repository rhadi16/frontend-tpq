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
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px; margin-bottom: 10px;">TAMPIL DATA REFERENSI PENGAJAR</h3>
                        
                        <div class="row">

                          <div class="col-xs-12">
                            <a href="<?php BASEURL; ?>backpage_referensi_bacaan_sholat" class="btn btn-md btn-info-outline">
                              Bacaan Sholat
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_doa_harian" class="btn btn-md btn-info-outline">
                              Doa Harian
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_surah_pendek" class="btn btn-md btn-info-outline">
                              Surah Pendek
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_pengajar" class="btn btn-md btn-info-outline">
                              Pengajar
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_sekolah" class="btn btn-md btn-info-outline">
                              Sekolah
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_kelas" class="btn btn-md btn-info-outline">
                              Kelas
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_bulan" class="btn btn-md btn-info-outline">
                              Bulan
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_tahun" class="btn btn-md btn-info-outline">
                              Tahun
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_hubungan_keluarga" class="btn btn-md btn-info-outline">
                              Hubungan Keluarga
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_devisi" class="btn btn-md btn-info-outline">
                              Devisi
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_jabatan" class="btn btn-md btn-info-outline">
                              Jabatan
                            </a>
                            <a href="<?php BASEURL; ?>backpage_referensi_libur" class="btn btn-md btn-primary">
                              Hari Libur
                            </a>
                          </div>

                        </div>

                        <form action="function/ref_libur_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">

                            <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1" style="height: unset;">
                                <div class="mbr-table-cell">
                                    <div class="container">
                                        <div class="row">

                                            <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important; padding-top: unset;">
                                                <h4 class="mbr-section-title display-3" id="judul2">Tambah Libur</h4>

                                                <hr>

                                                <div class="mbr-section-text">
                                                    <div class='row'>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                Tanggal Libur
                                                                <input type="date" class="form-control" name="tgl" placeholder="Tanggal Libur.." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="mbr-section-text">
                                                    <div class='row'>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                Keterangan Libur
                                                                <input type="text" class="form-control" name="keterangan" placeholder="keterangan Libur.." required>
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
                            
                            <span style="margin: 10px;"><?php include('plugin/paginasi/form-pencarian.php'); ?></span>
                            <table class="gigo-responsive" style="margin-right: 10px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Tanggal Libur</th>
                                  <th scope="col">Ket Libur</th>
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
                                  <td data-label="Tanggal Libur"><?php echo $data['tgl']; ?></td>
                                  <td data-label="Ket Libur"><?php echo $data['keterangan']; ?></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="function/ref_libur_func.php?action=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
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
</script>


<?php $tinggi = '610px'; include('template/bottom.php') ?>