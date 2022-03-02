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
                            <a href="<?php BASEURL; ?>backpage_tambah_pendaftaran" class="btn btn-lg btn-warning">
                              <span class="fa fa-plus"></span>&nbsp;Tambah Pendaftar
                            </a>
                          </div>

                        </div>
                        
                        <div class="mbr-section-nopadding">
                            
                            <span style="margin: 10px;"><?php include(BASEURL.'backpage/plugin/paginasi/form-pencarian.php'); ?></span>
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
                              <?php
                                $no=1;

                                include(BASEURL.'backpage/plugin/paginasi/main-paginasi.php');

                                while($data = mysqli_fetch_array($dt)){
                              ?>
                                <tr>
                                  <td data-label="No" scope="row" ><?php echo $no; ?></td>
                                  <td data-label="Nama Ortu/Wali"><?php echo $data['nama_ortu_wali']; ?></td>
                                  <td data-label="Alamat Ortu/Wali"><?php echo $data['alamat_ortu_wali']; ?></td>
                                  <td data-label="Nomor Hp Ortu/Wali"><?php echo $data['no_hp_wa_ortu_wali']; ?></td>
                                  <td data-label="Nama Siswa"><?php echo $data['nama_siswa']; ?></td>
                                  <td data-label="TTL Siswa"><?php echo $data['tempat_lahir_siswa']; ?>, <?php echo datetimeFormat::TanggalIndo($data['tanggal_lahir_siswa']); ?></td>
                                  <td data-label="Tingkat Sekolah"><?php echo $data['tingkat_sekolah']; ?> Kelas <?php echo $data['kelas']; ?></td>
                                  <td data-label="Foto"><img src="foto/<?php echo $data['file_name']; ?>" id="foto-santri"></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="pendaftaran_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-info btn-xs">Edit</a>
                                    <a href="function/pendaftaran_func.php?action=delete&id=<?php echo $data['id']; ?>&foto=<?php echo $data['file_name']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                    <a href="pendaftaran_detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-xs">Lihat Detail</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#konfirmasi<?php echo $data['id']; ?>">
                                      Konfirmasi
                                    </button>
                                  </td>
                                </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="konfirmasi<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                  <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                                                  <div class="form-group">
                                                    <label for="nist">Masukkan NIST</label>
                                                    <input type="text" class="form-control" name="nist" placeholder="NIST..." readonly required id="get_nist_baru">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="nama">Nama Siswa</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama Siswa..." value="<?php echo $data['nama_siswa']; ?>">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="jkel_santri">Jenis Kelamin Siswa</label>
                                                    <input type="text" class="form-control" name="jkel_siswa" placeholder="Jenis Kelamin Siswa..." value="<?php echo $data['jkel_siswa']; ?>">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir Siswa</label>
                                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir..." value="<?php echo $data['tempat_lahir_siswa']; ?>">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="tgl_lahir">Tanggal Lahir Siswa</label>
                                                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir..." value="<?php echo $data['tanggal_lahir_siswa']; ?>">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="id_ref_sekolah">Tingkat Sekolah</label>
                                                    <select class="form-control" name="id_ref_sekolah">
                                                      <option selected>Pilih Tingkatan Sekolah..</option>
                                                      <?php 
                                                        $qry1 = "SELECT * FROM ref_sekolah";

                                                        $dt1 = mysqli_query($mysqli, $qry1);

                                                        while($data1 = mysqli_fetch_array($dt1)){
                                                       ?>
                                                          <option value="<?php echo $data1['id']; ?>"
                                                            <?php if($data['id_ref_sekolah']==$data1['id']){ echo 'selected';} ?>
                                                          ><?php echo $data1['tingkatan_sekolah']; ?></option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="id_ref_kelas">Kelas</label>
                                                      <select class="form-control" name="id_ref_kelas">
                                                        <option selected>Pilih Kelas..</option>
                                                        <?php 
                                                          $qry1 = "SELECT 
                                                                     A.id,
                                                                     A.tingkat_sekolah,
                                                                     A.kelas,
                                                                     CONCAT(A.tingkat_sekolah, ' Kelas ', A.kelas) detail_kelas
                                                                   FROM
                                                                   (
                                                                     SELECT 
                                                                       a.id,
                                                                       CASE
                                                                         WHEN a.id_ref_sekolah = b.id THEN b.tingkatan_sekolah
                                                                         ELSE 'Tidak Ada Sekolah'
                                                                       END AS tingkat_sekolah,
                                                                       a.kelas kelas
                                                                     FROM ref_kelas a
                                                                     LEFT JOIN ref_sekolah b ON a.id_ref_sekolah=b.id
                                                                   ) AS A";

                                                          $dt1 = mysqli_query($mysqli, $qry1);

                                                          while($data1 = mysqli_fetch_array($dt1)){
                                                         ?>
                                                            <option value="<?php echo $data1['id']; ?>"
                                                              <?php if($data['id_ref_kelas']==$data1['id']){ echo 'selected';} ?>
                                                            ><?php echo $data1['detail_kelas']; ?></option>
                                                        <?php } ?>
                                                      </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="tgl_lahir">Tingkat Bacaan Santri</label>
                                                    <select class="form-control" name="iqra_alquran">
                                                      <option selected>Tingkat Bacaan..</option>
                                                      <option value="0"
                                                       <?php if($data['iqra_alquran']==0){ echo 'selected';} ?>
                                                      >Iqra</option>
                                                      <option value="1"
                                                       <?php if($data['iqra_alquran']==1){ echo 'selected';} ?>
                                                      >Al-Qur'an</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="file_name">Nama File Foto</label>
                                                    <input type="text" class="form-control" name="file_name" placeholder="Nama File Foto..." value="<?php echo $data['file_name']; ?>">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="nama_ortu_wali">Nama Orang Tua/Wali</label>
                                                    <input type="text" class="form-control" name="nama_ortu_wali" placeholder="Nama Orang Tua/Wali..." value="<?php echo $data['nama_ortu_wali']; ?>">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="jkel_ortu_wali">Jenis Kelamin Orang Tua/Wali</label>
                                                    <select class="form-control" name="jkel_ortu_wali">
                                                      <option selected>Jenis Kelamin Orang Tua/Wali..</option>
                                                      <option value="Pria"
                                                       <?php if($data['jkel_ortu_wali']=="Pria"){ echo 'selected';} ?>
                                                      >Pria</option>
                                                      <option value="Wanita"
                                                       <?php if($data['jkel_ortu_wali']=="Wanita"){ echo 'selected';} ?>
                                                      >Wanita</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="jkel_ortu_wali">Hubungan Keluarga Santri Dengan Ortu/Wali</label>
                                                    <select class="form-control" name="id_hubungan_keluarga">
                                                      <option selected>Pilih Hubungan Keluarga..</option>
                                                      <?php 
                                                        $qry1 = "SELECT * FROM ref_hubungan_keluarga";

                                                        $dt1 = mysqli_query($mysqli, $qry1);

                                                        while($data1 = mysqli_fetch_array($dt1)){
                                                       ?>
                                                          <option value="<?php echo $data1['id']; ?>"
                                                            <?php if($data['id_hubungan_keluarga']==$data1['id']){ echo 'selected';} ?>
                                                          ><?php echo $data1['hubungan_keluarga']; ?></option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="alamat_ortu_wali">Alamat Orang Tua/Wali</label>
                                                    <input type="text" class="form-control" name="alamat_ortu_wali" placeholder="Alamat Orang Tua/Wali..." value="<?php echo $data['alamat_ortu_wali']; ?>">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="pekerjaan_ortu_wali">Pekerjaan Orang Tua/Wali</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ortu_wali" placeholder="Pekerjaan Orang Tua/Wali..." value="<?php echo $data['pekerjaan_ortu_wali']; ?>">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="no_hp_wa_ortu_wali">Nomor HP Orang Tua/Wali</label>
                                                    <input type="text" class="form-control" name="no_hp_wa_ortu_wali" placeholder="Nomor HP Orang Tua/Wali..." value="<?php echo $data['no_hp_wa_ortu_wali']; ?>">
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="sts_hidup_ayah">Status Hidup Ayah</label>
                                                    <select class="form-control" name="sts_hidup_ayah">
                                                      <option selected>Status Hidup Ayah..</option>
                                                      <option value="Hidup"
                                                       <?php if($data['sts_hidup_ayah']=="Hidup"){ echo 'selected';} ?>
                                                      >Hidup</option>
                                                      <option value="Almarhum"
                                                       <?php if($data['sts_hidup_ayah']=="Almarhum"){ echo 'selected';} ?>
                                                      >Almarhum</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="sts_hidup_ibu">Status Hidup Ibu</label>
                                                    <select class="form-control" name="sts_hidup_ibu">
                                                      <option selected>Status Hidup Ibu..</option>
                                                      <option value="Hidup"
                                                       <?php if($data['sts_hidup_ibu']=="Hidup"){ echo 'selected';} ?>
                                                      >Hidup</option>
                                                      <option value="Almarhum"
                                                       <?php if($data['sts_hidup_ibu']=="Almarhumah"){ echo 'selected';} ?>
                                                      >Almarhumah</option>
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="tgl_pendaftaran">Tanggal Pendaftaran</label>
                                                    <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal Pendaftaran..." value="<?php echo $data['tgl_pendaftaran']; ?>">
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
                                $('#konfirmasi<?php echo $data['id']; ?>').on('shown.bs.modal', function(e) {
                                   
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
                              
                              <?php $no++; } ?>
                              
                              </tbody>

                            </table>
                            <?php include(BASEURL.'backpage/plugin/paginasi/btn-paginasi.php'); ?>
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