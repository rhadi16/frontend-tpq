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
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/qrcode.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/dom-to-image.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/FileSaver.min.js"></script>

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">KELOLA DATA PENGURUS</h3>

                        <div class="row">

                          <div class="col-xs-12">
                            <a href="<?= BASEURL; ?>backpage_pengurus/tambah" class="btn btn-lg btn-warning">
                              <span class="fa fa-plus"></span>&nbsp;Tambah Pengurus
                            </a>
                          </div>

                        </div>
                        
                        <div class="mbr-section-nopadding">

                            <a href="<?= BASEURL; ?>backpage_pengurus/all_qrcode" class="btn btn-md btn-primary" target="_blank" style="background-color: #4527a0;">
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
                                <tr>
                                  <td data-label="No" scope="row"></td>
                                  <td data-label="Nipg"></td>
                                  <td data-label="Nama"></td>
                                  <td data-label="TTL"> , </td>
                                  <td data-label="Nomor HP"></td>
                                  <td data-label="Alamat"></td>
                                  <td data-label="Devisi"></td>
                                  <td data-label="Jabatan"></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="<?= BASEURL; ?>backpage_pengurus/edit" class="btn btn-info btn-xs">Edit</a>
                                    <a href="<?= BASEURL; ?>backpage_pengurus" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                    <a href="<?= BASEURL; ?>backpage_pengurus/detail" class="btn btn-success btn-xs">Lihat Detail</a>
                                    <a href="<?= BASEURL; ?>backpage_pengurus/gaji" class="btn btn-xs" style="background-color: #ef6c00; color: #fff;">Detail Gaji</a>
                                    <button type="button" class="btn btn-xs" id="download-qrcode" data-toggle="modal" data-target="#barcode" style="background-color: #4527a0; color: #fff;">Lihat Qrcode</button>
                                        <a href="function/users_func.php" class="btn btn-danger btn-xs confirmation">Hapus User</a>
                                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edituser">Edit User</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                              </div>
                                              <form action="function/users_func.php?action=update" id="form_proposal" enctype="multipart/form-data" method="post">
                                                <div class="modal-body">

                                                  <input type="hidden" value="" name="id" readonly>

                                                  <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="username" name="username" value="" required readonly>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="password">Masukkan Password Baru</label>
                                                    <input type="text" class="form-control" id="password" placeholder="Password" name="password" required>
                                                  </div>

                                                  <input type="hidden" value="" name="hak_akses" readonly>
                                                  <input type="hidden" value="" name="nipg" readonly>
                                                  <input type="hidden" value="" name="email" readonly>
                                                  <input type="hidden" value="" name="id_tpq" readonly>

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary confir-edit-user">Simpan</button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#user">Tambah User</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                              </div>
                                              <form action="function/users_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">
                                                <div class="modal-body">

                                                  <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="username" name="username" value="" required readonly>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                                  </div>

                                                  <input type="hidden" value="OPERATOR" name="hak_akses" readonly>
                                                  <input type="hidden" value="" name="nipg" readonly>
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
                                  </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="barcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Qrcode Pengurus</h5>
                                      </div>
                                      <div class="modal-body">
                                        <input type="hidden" id="nipg" value="">
                                        <input type="hidden" id="nama" value="">

                                        <div class="w3-container" style="text-align: center; margin: 0 auto;">
                                          <div class="w3-card-4" style="width: 100%; padding-top: 20px;" id="kartu-pengurus">
                                            <center><div id="qrcode" style="width: 100%;"></div></center>
                                            <div class="w3-container w3-center" style="margin-top: 20px;">
                                              <p><b>NIPG</b>  : <span id="_nipg"></span> <br> 
                                                 <b>NAMA</b> : <span id="_nama"></span></p>
                                            </div>
                                          </div>
                                        </div>

                                        <div style="display: flex; justify-content: center;">
                                          <button type="button" id="btn-kartu-pengurus" class="btn btn-xs btn-primary">
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
                                  var qrcode = new QRCode(document.getElementById("qrcode"), {
                                    width : 223,
                                    height : 223
                                  });

                                  function makeCode() {   
                                    var nipg = document.getElementById("nipg").value;
                                    var nama = document.getElementById("nama").value;
                                    // var strArr = siswa.split('-');

                                    // var nis = strArr[0];
                                    // var nama = strArr[1];

                                    var data_pengurus = 
                                      nipg+'||'+
                                      nama;

                                    if (!data_pengurus) {
                                      alert("Maaf Input STB dan Nama Langkap Terlebih Dahulu!");
                                      return;
                                    }
                                    
                                      // $('#kartu-siswa').show();
                                      // $('#btn-kartu-siswa').show();
                                    
                                    qrcode.makeCode(data_pengurus); //kode utama
                                    $('#_nipg').html(nipg);
                                    $('#_nama').html(nama.toUpperCase());

                                  }

                                  $('#download-qrcode').on('click', function(e) {
                                    makeCode();
                                  });

                                  var btn = document.getElementById('btn-kartu-pengurus');
                                  btn.onclick = function() {
                                    domtoimage.toBlob(document.getElementById('kartu-pengurus'))
                                      .then(function(blob) {
                                        window.saveAs(blob, 'kartu-<?php echo $data['nama']; ?>.png');
                                      });
                                  }
                                </script>
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

    $('.confir-edit-user').on('click', function(e) {
       return confirm('Anda Yakin Mengubah Password?');
    });
</script>