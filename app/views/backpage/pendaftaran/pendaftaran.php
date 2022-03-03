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


    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">KELOLA DATA PENDAFTAR</h3>
                        
                        <div class="row">

                          <div class="col-xs-12">
                            <a href="<?= BASEURL; ?>backpage_pendaftaran/tambah" class="btn btn-lg btn-warning">
                              <span class="fa fa-plus"></span>&nbsp;Tambah Pendaftar
                            </a>
                          </div>

                        </div>
                        
                        <div class="mbr-section-nopadding">
                            
                            <span style="margin: 10px;"></span>
                            <table class="gigo-responsive" style="margin-right: 10px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Ortu/Wali</th>
                                  <th scope="col">Alamat Ortu/Wali</th>
                                  <th scope="col">Nomor HP Ortu/Wali</th>
                                  <th scope="col">Nama Siswa</th>
                                  <th scope="col">TTL Siswa</th>
                                  <th scope="col">Tingkat Sekolah</th>
                                  <th scope="col">Foto</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td data-label="No" scope="row" ></td>
                                  <td data-label="Nama Ortu/Wali"></td>
                                  <td data-label="Alamat Ortu/Wali"></td>
                                  <td data-label="Nomor Hp Ortu/Wali"></td>
                                  <td data-label="Nama Siswa"></td>
                                  <td data-label="TTL Siswa">, </td>
                                  <td data-label="Tingkat Sekolah"> Kelas </td>
                                  <td data-label="Foto"><img src="foto/" id="foto-santri"></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="<?= BASEURL; ?>backpage_pendaftaran/edit" class="btn btn-info btn-xs">Edit</a>
                                    <a href="<?= BASEURL; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                    <a href="<?= BASEURL; ?>backpage_pendaftaran/detail" class="btn btn-success btn-xs">Lihat Detail</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#konfirmasi">
                                      Konfirmasi
                                    </button>
                                  </td>
                                </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pendaftaran</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form action="function/pendaftaran_func.php?action=confirm" id="form_proposal" enctype="multipart/form-data" method="post">
                                              <div class="modal-body">
                                                  <input type="hidden" class="form-control" name="id" value="">
                                                  <div class="form-group">
                                                    <label for="nist">Masukkan NIST</label>
                                                    <input type="text" class="form-control" name="nist" placeholder="NIST..." readonly required id="get_nist_baru">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="nama">Nama Siswa</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama Siswa..." value="">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="jkel_santri">Jenis Kelamin Siswa</label>
                                                    <input type="text" class="form-control" name="jkel_siswa" placeholder="Jenis Kelamin Siswa..." value="">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir Siswa</label>
                                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir..." value="">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="tgl_lahir">Tanggal Lahir Siswa</label>
                                                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir..." value="">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="id_ref_sekolah">Tingkat Sekolah</label>
                                                    <select class="form-control" name="id_ref_sekolah">
                                                      <option selected>Pilih Tingkatan Sekolah..</option>
                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="id_ref_kelas">Kelas</label>
                                                      <select class="form-control" name="id_ref_kelas">
                                                        <option selected>Pilih Kelas..</option>
                                                      </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="tgl_lahir">Tingkat Bacaan Santri</label>
                                                    <select class="form-control" name="iqra_alquran">
                                                      <option selected>Tingkat Bacaan..</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="file_name">Nama File Foto</label>
                                                    <input type="text" class="form-control" name="file_name" placeholder="Nama File Foto..." value="">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="nama_ortu_wali">Nama Orang Tua/Wali</label>
                                                    <input type="text" class="form-control" name="nama_ortu_wali" placeholder="Nama Orang Tua/Wali..." value="">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="jkel_ortu_wali">Jenis Kelamin Orang Tua/Wali</label>
                                                    <select class="form-control" name="jkel_ortu_wali">
                                                      <option selected>Jenis Kelamin Orang Tua/Wali..</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="jkel_ortu_wali">Hubungan Keluarga Santri Dengan Ortu/Wali</label>
                                                    <select class="form-control" name="id_hubungan_keluarga">
                                                      <option selected>Pilih Hubungan Keluarga..</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="alamat_ortu_wali">Alamat Orang Tua/Wali</label>
                                                    <input type="text" class="form-control" name="alamat_ortu_wali" placeholder="Alamat Orang Tua/Wali..." value="">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="pekerjaan_ortu_wali">Pekerjaan Orang Tua/Wali</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ortu_wali" placeholder="Pekerjaan Orang Tua/Wali..." value="">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="no_hp_wa_ortu_wali">Nomor HP Orang Tua/Wali</label>
                                                    <input type="text" class="form-control" name="no_hp_wa_ortu_wali" placeholder="Nomor HP Orang Tua/Wali..." value="">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="sts_hidup_ayah">Status Hidup Ayah</label>
                                                    <select class="form-control" name="sts_hidup_ayah">
                                                      <option selected>Status Hidup Ayah..</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="sts_hidup_ibu">Status Hidup Ibu</label>
                                                    <select class="form-control" name="sts_hidup_ibu">
                                                      <option selected>Status Hidup Ibu..</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="tgl_pendaftaran">Tanggal Pendaftaran</label>
                                                    <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal Pendaftaran..." value="">
                                                  </div>

                                              </div>
                                              <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary confir-pendaftar">Tambah Santri</button>
                                              </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                              
                              <script type="text/javascript">
                                $('#konfirmasi').on('shown.bs.modal', function(e) {
                                   
                                  $.ajax({
                                    url: "api/get_nist.php",
                                    success: function(data){
                                    var arr = jQuery.parseJSON( data );
                                    
                                    $('#get_nist_baru').val(arr.nist_baru);
                                    },  error: function(error){
                                      alert(error);
                                    }
                                  });
                          
                                });  
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

    $('.confir-pendaftar').on('click', function(e) {
       return confirm('Anda Yakin Ingin Menambah Santri Baru?');
    });

    
</script>