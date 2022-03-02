<style type="text/css">
  .vc{
    font-size: 17px;
  }
  .btn-xs{
    padding: 5px;
    margin: 2px; 
  }/*
  @media only screen and (max-width: 1024px) {
    .gigo-responsive {
      width: unset;
    }
  }*/
  @media only screen and (max-width: 768px) {
    #judul {
      font-size: 2rem;
    }
    .gigo-responsive {
      width: 100%;
    }
  }
  @media only screen and (max-width: 425px) {
    #judul {
      font-size: 1.5rem !important;
    }
  }
</style>
<!-- <script type="text/javascript" src="assets/barcode/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php BASEURL; ?>backpage/assets/barcode/qrcode.js"></script>
<script type="text/javascript" src="<?php BASEURL; ?>backpage/assets/barcode/dom-to-image.min.js"></script>
<script type="text/javascript" src="<?php BASEURL; ?>backpage/assets/barcode/FileSaver.min.js"></script>

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">PEMASUKAN / DONASI / HIBAH</h3>

                        <div class="row">

                          <div class="col-xs-12">
                            <button type="button" data-toggle="modal" data-target="#tambah-donatur" class="btn btn-lg btn-warning">
                              <span class="fa fa-plus"></span>&nbsp;Tambah Data
                            </button>
                          </div>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="tambah-donatur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                              </div>
                              <form action="function/donatur_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">
                                <div class="modal-body">
                                  
                                  <div class="form-group">
                                    <label for="nama">Nama Pemberi</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Pemberi" name="nama" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="alamat">Alamat Pemberi</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Alamat Pemberi" name="alamat" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan Pemberi</label>
                                    <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan Pemberi" name="pekerjaan" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="bentuk_donasi">Bentuk Pemberi</label>
                                    <select class="form-control" name="bentuk_donasi" id="bentuk_donasi" required>
                                      <option selected>Pilih Bentuk Donasi..</option>
                                      <option value="UANG">UANG</option>
                                      <option value="SPIDOL">SPIDOL</option>
                                      <option value="PAPAN TULIS">PAPAN TULIS</option>
                                      <option value="BUKU">BUKU</option>
                                      <option value="BAJU">BAJU</option>
                                      <option value="SONGKOK">SONGKOK</option>
                                      <option value="MUKENA">MUKENA</option>
                                      <option value="MEJA">MEJA</option>
                                      <option value="SENDAL">SENDAL</option>
                                      <option value="AL QURAN">AL QURAN</option>
                                      <option value="LAIN-LAIN">LAIN-LAIN</option>
                                    </select>
                                  </div>
                                  <div class="form-group" style="display: none;" id="jumlah_uang">
                                    <label for="jumlah_uang">Jumlah Uang</label>
                                    <input type="number" class="form-control" placeholder="Jumlah Uang Pemberi" id="jumlah_uang_val" name="jumlah_uang" required>
                                  </div>
                                  <div class="form-group" style="display: none;" id="benda_pemberian">
                                    <label for="benda_pemberian">Benda Pemberian</label>
                                    <input type="text" class="form-control" placeholder="Benda Pemberian" id="benda_pemberian_val" name="benda_pemberian" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tgl_diterima_donasi">Tanggal Terima Pemberi</label>
                                    <input type="date" class="form-control" id="tgl_diterima_donasi" placeholder="Tanggal Terima Donasi" name="tgl_diterima_donasi" required>
                                  </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        
                        <div class="mbr-section-nopadding">
                            
                            <span style="margin: 10px;"><?php include('plugin/paginasi/form-pencarian.php'); ?></span>

                            <table class="gigo-responsive" style="margin-right: 10px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Alamat</th>
                                  <th scope="col">Pekerjaan</th>
                                  <th scope="col">Bentuk Pemberian</th>
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
                                  <td data-label="No" scope="row"><?php echo $no; ?></td>
                                  <td data-label="Nama"><?php echo $data['nama']; ?></td>
                                  <td data-label="Alamat"><?php echo $data['alamat']; ?></td>
                                  <td data-label="Pekerjaan"><?php echo $data['pekerjaan']; ?></td>
                                  <td data-label="Bentuk Pemberian">
                                    <?php 
                                      if ($data['bentuk_donasi'] == "LAIN-LAIN") {
                                        echo $data['benda_pemberian'];
                                      }
                                      elseif ($data['bentuk_donasi'] == "UANG") {
                                        echo $data['bentuk_donasi'].' Sebesar '.$data['jumlah_uang'];
                                      }
                                      else {
                                        echo $data['bentuk_donasi']; 
                                      }
                                    ?>  
                                  </td>
                                  <td data-label="Tanggal Terima"><?php echo datetimeFormat::TanggalIndo($data['tgl_diterima_donasi']); ?></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="donatur_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-info btn-xs">Edit</a>
                                    <a href="function/donatur_func.php?action=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
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

    $('#bentuk_donasi').on('change', function(){

      if($('#bentuk_donasi').val() == "UANG"){
        
        $('#jumlah_uang').show(300);
        $('#benda_pemberian').hide(300);

        $('#jumlah_uang_val').val("0");
        $('#benda_pemberian_val').val("-");
        
      }else if($('#bentuk_donasi').val() == "LAIN-LAIN"){
        
        $('#jumlah_uang').hide(300);
        $('#benda_pemberian').show(300);

        $('#jumlah_uang_val').val("0");
        $('#benda_pemberian_val').val("-");

      }else{

        $('#jumlah_uang').hide(300);
        $('#benda_pemberian').hide(300);

        $('#jumlah_uang_val').val("0");
        $('#benda_pemberian_val').val("-");

      }

    });

</script>