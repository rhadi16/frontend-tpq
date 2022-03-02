<style type="text/css">
  .vc{
    font-size: 17px;
  }
  .btn-xs{
    padding: 5px;
    margin: 2px; 
  }
  @media only screen and (max-width: 1024px) {
    .gigo-responsive {
      width: unset;
    }
  }
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
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">KELOLA DATA PENGURUS</h3>

                        <div class="row">

                          <div class="col-xs-12">
                            <a href="<?php BASEURL; ?>backpage_pengurus_tambah" class="btn btn-lg btn-warning">
                              <span class="fa fa-plus"></span>&nbsp;Tambah Pengurus
                            </a>
                          </div>

                        </div>
                        
                        <div class="mbr-section-nopadding">
                            
                            <span style="margin: 10px;"><?php include('plugin/paginasi/form-pencarian.php'); ?></span>

                            <a href="<?php BASEURL; ?>backpage_qrcode_semua_pengurus" class="btn btn-md btn-primary" target="_blank" style="background-color: #4527a0;">
                              Qrcode Semua Pengurus
                            </a>

                            <table class="gigo-responsive" style="margin-right: 10px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nipg</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">TTL</th>
                                  <th scope="col">Nomor HP</th>
                                  <th scope="col">Alamat</th>
                                  <th scope="col">Devisi</th>
                                  <th scope="col">Jabatan</th>
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
                                  <td data-label="Nipg"><?php echo $data['nipg']; ?></td>
                                  <td data-label="Nama"><?php echo $data['nama']; ?></td>
                                  <td data-label="TTL"><?php echo $data['tempat_lahir']; ?>, <?php echo datetimeFormat::TanggalIndo($data['tgl_lahir']); ?></td>
                                  <td data-label="Nomor HP"><?php echo $data['no_hp']; ?></td>
                                  <td data-label="Alamat"><?php echo $data['alamat']; ?></td>
                                  <td data-label="Devisi"><?php echo $data['devisi']; ?></td>
                                  <td data-label="Jabatan"><?php echo $data['jabatan']; ?></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="pengurus_edit.php?nipg=<?php echo $data['nipg']; ?>" class="btn btn-info btn-xs">Edit</a>
                                    <a href="function/pengurus_func.php?action=delete&nipg=<?php echo $data['nipg']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                    <a href="pengurus_detail.php?nipg=<?php echo $data['nipg']; ?>" class="btn btn-success btn-xs">Lihat Detail</a>
                                    <a href="pengurus_gaji.php?nipg=<?php echo $data['nipg'] ?>" class="btn btn-xs" style="background-color: #ef6c00; color: #fff;">Detail Gaji</a>
                                    <button type="button" class="btn btn-xs" id="download-qrcode<?php echo $data['nipg']; ?>" data-toggle="modal" data-target="#barcode<?php echo $data['nipg']; ?>" style="background-color: #4527a0; color: #fff;">Lihat Qrcode</button>
                                    <?php 
                                      $tu = mysqli_query($mysqli, "SELECT * FROM tb_users WHERE username ='".$data['nipg']."'");
                                      $du = mysqli_fetch_array($tu);

                                      if (isset($du['username'])) {
                                    ?>
                                        <a href="function/users_func.php?action=delete&id=<?php echo $du['id'] ?>" class="btn btn-danger btn-xs confirmation">Hapus User</a>
                                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edituser<?php echo $du['username']; ?>">Edit User</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="edituser<?php echo $du['username']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                              </div>
                                              <form action="function/users_func.php?action=update" id="form_proposal" enctype="multipart/form-data" method="post">
                                                <div class="modal-body">

                                                  <input type="hidden" value="<?php echo $du['id']; ?>" name="id" readonly>

                                                  <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="username" name="username" value="<?php echo $du['username']; ?>" required readonly>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="password">Masukkan Password Baru</label>
                                                    <input type="text" class="form-control" id="password" placeholder="Password" name="password" required>
                                                  </div>

                                                  <input type="hidden" value="<?php echo $du['hak_akses']; ?>" name="hak_akses" readonly>
                                                  <input type="hidden" value="<?php echo $du['nipg']; ?>" name="nipg" readonly>
                                                  <input type="hidden" value="<?php echo $du['email']; ?>" name="email" readonly>
                                                  <input type="hidden" value="<?php echo $du['id_tpq']; ?>" name="id_tpq" readonly>

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary confir-edit-user">Simpan</button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                    <?php
                                      } else {
                                    ?>
                                        <button type="button" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#user<?php echo $data['nipg']; ?>">Tambah User</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="user<?php echo $data['nipg']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                              </div>
                                              <form action="function/users_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">
                                                <div class="modal-body">

                                                  <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="username" name="username" value="<?php echo $data['nipg']; ?>" required readonly>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                                  </div>

                                                  <input type="hidden" value="OPERATOR" name="hak_akses" readonly>
                                                  <input type="hidden" value="<?php echo $data['nipg']; ?>" name="nipg" readonly>
                                                  <input type="hidden" value="admin@gmail.com" name="email" readonly>
                                                  <input type="hidden" value="1" name="id_tpq" readonly>

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                    <?php
                                      }
                                    ?>
                                  </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="barcode<?php echo $data['nipg']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Qrcode Pengurus</h5>
                                      </div>
                                      <div class="modal-body">
                                        <input type="hidden" id="nipg<?php echo $data['nipg']; ?>" value="<?php echo $data['nipg']; ?>">
                                        <input type="hidden" id="nama<?php echo $data['nipg']; ?>" value="<?php echo $data['nama']; ?>">

                                        <div class="w3-container" style="text-align: center; margin: 0 auto;">
                                          <div class="w3-card-4" style="width: 100%; padding-top: 20px;" id="kartu-pengurus<?php echo $data['nipg']; ?>">
                                            <center><div id="qrcode<?php echo $data['nipg']; ?>" style="width: 100%;"></div></center>
                                            <div class="w3-container w3-center" style="margin-top: 20px;">
                                              <p><b>NIPG</b>  : <span id="_nipg<?php echo $data['nipg']; ?>"></span> <br> 
                                                 <b>NAMA</b> : <span id="_nama<?php echo $data['nipg']; ?>"></span></p>
                                            </div>
                                          </div>
                                        </div>

                                        <div style="display: flex; justify-content: center;">
                                          <button type="button" id="btn-kartu-pengurus<?php echo $data['nipg']; ?>" class="btn btn-xs btn-primary">
                                            Download Qrcode
                                          </button>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <script type="text/javascript">
                                  var qrcode<?php echo $data['nipg']; ?> = new QRCode(document.getElementById("qrcode<?php echo $data['nipg']; ?>"), {
                                    width : 223,
                                    height : 223
                                  });

                                  function makeCode<?php echo $data['nipg']; ?>() {   
                                    var nipg<?php echo $data['nipg']; ?> = document.getElementById("nipg<?php echo $data['nipg']; ?>").value;
                                    var nama<?php echo $data['nipg']; ?> = document.getElementById("nama<?php echo $data['nipg']; ?>").value;
                                    // var strArr = siswa.split('-');

                                    // var nis = strArr[0];
                                    // var nama = strArr[1];

                                    var data_pengurus<?php echo $data['nipg']; ?> = 
                                      nipg<?php echo $data['nipg']; ?>+'||'+
                                      nama<?php echo $data['nipg']; ?>;

                                    if (!data_pengurus<?php echo $data['nipg']; ?>) {
                                      alert("Maaf Input STB dan Nama Langkap Terlebih Dahulu!");
                                      return;
                                    }
                                    
                                      // $('#kartu-siswa').show();
                                      // $('#btn-kartu-siswa').show();
                                    
                                    qrcode<?php echo $data['nipg']; ?>.makeCode(data_pengurus<?php echo $data['nipg']; ?>); //kode utama
                                    $('#_nipg<?php echo $data['nipg']; ?>').html(nipg<?php echo $data['nipg']; ?>);
                                    $('#_nama<?php echo $data['nipg']; ?>').html(nama<?php echo $data['nipg']; ?>.toUpperCase());

                                  }

                                  $('#download-qrcode<?php echo $data['nipg']; ?>').on('click', function(e) {
                                    makeCode<?php echo $data['nipg']; ?>();
                                  });

                                  var btn<?php echo $data['nipg']; ?> = document.getElementById('btn-kartu-pengurus<?php echo $data['nipg']; ?>');
                                  btn<?php echo $data['nipg']; ?>.onclick = function() {
                                    domtoimage.toBlob(document.getElementById('kartu-pengurus<?php echo $data['nipg']; ?>'))
                                      .then(function(blob) {
                                        window.saveAs(blob, 'kartu-<?php echo $data['nama']; ?>.png');
                                      });
                                  }
                                </script>

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

    $('.confir-edit-user').on('click', function(e) {
       return confirm('Anda Yakin Mengubah Password?');
    });
</script>