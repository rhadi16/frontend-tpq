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
    #foto-santri {
      width: 200px !important;
    }
    .gigo-responsive {
      width: 100%;
    }
  }
  @media only screen and (max-width: 425px) {
    #judul {
      font-size: 1.5rem !important;
    }
    #foto-santri {
      width: 150px !important;
    }
  }
  #foto-santri {
    width: 100%;
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
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px; margin-bottom: unset;">KELOLA DATA SANTRI</h3>
                        
                        <div class="mbr-section-nopadding">
                            
                            <span style="margin: 10px;"><?php include('plugin/paginasi/form-pencarian.php'); ?></span>

                            <a href="<?php BASEURL; ?>backpage_qrcode_semua_santri" class="btn btn-md btn-primary" target="_blank" style="background-color: #4527a0;">
                              Qrcode Semua Santri
                            </a>

                            <table class="gigo-responsive" style="margin-right: 10px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nist</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">TTL</th>
                                  <th scope="col">Tingkat Sekolah</th>
                                  <th scope="col">Iqra/Al-Qur'an</th>
                                  <th scope="col">Foto</th>
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
                                  <td data-label="Nist"><?php echo $data['nist']; ?></td>
                                  <td data-label="Nama"><?php echo $data['nama']; ?></td>
                                  <td data-label="TTL"><?php echo $data['tempat_lahir']; ?>, <?php echo datetimeFormat::TanggalIndo($data['tgl_lahir']); ?></td>
                                  <td data-label="Tingkat Sekolah"><?php echo $data['tingkat_sekolah']; ?> Kelas <?php echo $data['kelas']; ?></td>
                                  <td data-label="Tingkat Bacaan"><?php echo $data['tingkat_bacaan']; ?></td>
                                  <td data-label="Foto"><img src="foto/<?php echo $data['file_name']; ?>" id="foto-santri" style="width: 100%;"></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="santri_edit.php?nist=<?php echo $data['nist']; ?>" class="btn btn-info btn-xs">Edit</a>
                                    <a href="function/santri_func.php?action=delete&nist=<?php echo $data['nist']; ?>&foto=<?php echo $data['file_name']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                    <a href="santri_detail.php?nist=<?php echo $data['nist']; ?>" class="btn btn-success btn-xs">Lihat Detail</a>
                                    <a href="hafalan_bacaan_sholat_santri.php?nist=<?php echo $data['nist'] ?>" class="btn btn-secondary btn-xs">Bacaan Sholat</a>
                                    <a href="hafalan_doa_harian_santri.php?nist=<?php echo $data['nist'] ?>" class="btn btn-warning btn-xs">Doa Harian</a>
                                    <a href="hafalan_surah_pendek_santri.php?nist=<?php echo $data['nist'] ?>" class="btn btn-primary btn-xs">Surah Pendek</a>
                                    <a href="riwayat_bacaan.php?nist=<?php echo $data['nist'] ?>" class="btn btn-xs" style="background-color: #afb42b; color: #fff;">Riwayat Bacaan</a>
                                    <a href="pembayaran.php?nist=<?php echo $data['nist'] ?>" class="btn btn-xs" style="background-color: #ef6c00; color: #fff;">Pembayaran</a>
                                    <button type="button" class="btn btn-xs" id="download-qrcode<?php echo $data['nist']; ?>" data-toggle="modal" data-target="#barcode<?php echo $data['nist']; ?>" style="background-color: #4527a0; color: #fff;">Lihat Qrcode</button>
                                  </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="barcode<?php echo $data['nist']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Qrcode Santri</h5>
                                      </div>
                                      <div class="modal-body">
                                        <input type="hidden" id="nist<?php echo $data['nist']; ?>" value="<?php echo $data['nist']; ?>">
                                        <input type="hidden" id="nama<?php echo $data['nist']; ?>" value="<?php echo $data['nama']; ?>">

                                        <div class="w3-container" style="text-align: center; margin: 0 auto;">
                                          <div class="w3-card-4" style="width: 100%; padding-top: 20px;" id="kartu-santri<?php echo $data['nist']; ?>">
                                            <center><div id="qrcode<?php echo $data['nist']; ?>" style="width: 100%;"></div></center>
                                            <div class="w3-container w3-center" style="margin-top: 20px;">
                                              <p><b>NIST</b>  : <span id="_nist<?php echo $data['nist']; ?>"></span> <br> 
                                                 <b>NAMA</b> : <span id="_nama<?php echo $data['nist']; ?>"></span></p>
                                            </div>
                                          </div>
                                        </div>

                                        <div style="display: flex; justify-content: center;">
                                          <button type="button" id="btn-kartu-siswa<?php echo $data['nist']; ?>" class="btn btn-xs btn-primary">
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
                                  var qrcode<?php echo $data['nist']; ?> = new QRCode(document.getElementById("qrcode<?php echo $data['nist']; ?>"), {
                                    width : 223,
                                    height : 223
                                  });

                                  function makeCode<?php echo $data['nist']; ?>() {   
                                    var nist<?php echo $data['nist']; ?> = document.getElementById("nist<?php echo $data['nist']; ?>").value;
                                    var nama<?php echo $data['nist']; ?> = document.getElementById("nama<?php echo $data['nist']; ?>").value;
                                    // var strArr = siswa.split('-');

                                    // var nis = strArr[0];
                                    // var nama = strArr[1];

                                    var data_santri<?php echo $data['nist']; ?> = 
                                      nist<?php echo $data['nist']; ?>+'||'+
                                      nama<?php echo $data['nist']; ?>;

                                    if (!data_santri<?php echo $data['nist']; ?>) {
                                      alert("Maaf Input STB dan Nama Langkap Terlebih Dahulu!");
                                      return;
                                    }
                                    
                                      // $('#kartu-siswa').show();
                                      // $('#btn-kartu-siswa').show();
                                    
                                    qrcode<?php echo $data['nist']; ?>.makeCode(data_santri<?php echo $data['nist']; ?>); //kode utama
                                    $('#_nist<?php echo $data['nist']; ?>').html(nist<?php echo $data['nist']; ?>);
                                    $('#_nama<?php echo $data['nist']; ?>').html(nama<?php echo $data['nist']; ?>.toUpperCase());

                                  }

                                  $('#download-qrcode<?php echo $data['nist']; ?>').on('click', function(e) {
                                    makeCode<?php echo $data['nist']; ?>();
                                  });

                                  var btn<?php echo $data['nist']; ?> = document.getElementById('btn-kartu-siswa<?php echo $data['nist']; ?>');
                                  btn<?php echo $data['nist']; ?>.onclick = function() {
                                    domtoimage.toBlob(document.getElementById('kartu-santri<?php echo $data['nist']; ?>'))
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
</script>