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
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/qrcode.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/dom-to-image.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>backpage/assets/barcode/FileSaver.min.js"></script>

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px; margin-bottom: unset;">KELOLA DATA SANTRI</h3>
                        
                        <div class="mbr-section-nopadding">

                            <a href="<?= BASEURL; ?>backpage_santri/all_qrcode" class="btn btn-md btn-primary" target="_blank" style="background-color: #4527a0;">
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
                                <tr>
                                  <td data-label="No" scope="row"></td>
                                  <td data-label="Nist"></td>
                                  <td data-label="Nama"></td>
                                  <td data-label="TTL">, </td>
                                  <td data-label="Tingkat Sekolah"> Kelas </td>
                                  <td data-label="Tingkat Bacaan"></td>
                                  <td data-label="Foto"><img src="foto/" id="foto-santri" style="width: 100%;"></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="<?= BASEURL; ?>backpage_santri/edit" class="btn btn-info btn-xs">Edit</a>
                                    <a href="<?= BASEURL; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                    <a href="<?= BASEURL; ?>backpage_santri/detail" class="btn btn-success btn-xs">Lihat Detail</a>
                                    <a href="<?= BASEURL; ?>backpage_santri/bacaan_sholat" class="btn btn-secondary btn-xs">Bacaan Sholat</a>
                                    <a href="<?= BASEURL; ?>backpage_santri/doa_harian" class="btn btn-warning btn-xs">Doa Harian</a>
                                    <a href="<?= BASEURL; ?>backpage_santri/surah_pendek" class="btn btn-primary btn-xs">Surah Pendek</a>
                                    <a href="<?= BASEURL; ?>backpage_santri/riwayat_bacaan" class="btn btn-xs" style="background-color: #afb42b; color: #fff;">Riwayat Bacaan</a>
                                    <a href="<?= BASEURL; ?>backpage_santri/pembayaran" class="btn btn-xs" style="background-color: #ef6c00; color: #fff;">Pembayaran</a>
                                    <button type="button" class="btn btn-xs" id="download-qrcode" data-toggle="modal" data-target="#barcode" style="background-color: #4527a0; color: #fff;">Lihat Qrcode</button>
                                  </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="barcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Qrcode Santri</h5>
                                      </div>
                                      <div class="modal-body">
                                        <input type="hidden" id="nist" value="">
                                        <input type="hidden" id="nama" value="<?php echo $data['nama']; ?>">

                                        <div class="w3-container" style="text-align: center; margin: 0 auto;">
                                          <div class="w3-card-4" style="width: 100%; padding-top: 20px;" id="kartu-santri">
                                            <center><div id="qrcode" style="width: 100%;"></div></center>
                                            <div class="w3-container w3-center" style="margin-top: 20px;">
                                              <p><b>NIST</b>  : <span id="_nist"></span> <br> 
                                                 <b>NAMA</b> : <span id="_nama"></span></p>
                                            </div>
                                          </div>
                                        </div>

                                        <div style="display: flex; justify-content: center;">
                                          <button type="button" id="btn-kartu-siswa" class="btn btn-xs btn-primary">
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
                                    var nist = document.getElementById("nist").value;
                                    var nama = document.getElementById("nama").value;
                                    // var strArr = siswa.split('-');

                                    // var nis = strArr[0];
                                    // var nama = strArr[1];

                                    var data_santri = 
                                      nist+'||'+
                                      nama;

                                    if (!data_santri) {
                                      alert("Maaf Input STB dan Nama Langkap Terlebih Dahulu!");
                                      return;
                                    }
                                    
                                      // $('#kartu-siswa').show();
                                      // $('#btn-kartu-siswa').show();
                                    
                                    qrcode.makeCode(data_santri); //kode utama
                                    $('#_nist').html(nist);
                                    $('#_nama').html(nama.toUpperCase());

                                  }

                                  $('#download-qrcode').on('click', function(e) {
                                    makeCode();
                                  });

                                  var btn = document.getElementById('btn-kartu-siswa');
                                  btn.onclick = function() {
                                    domtoimage.toBlob(document.getElementById('kartu-santri'))
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
</script>