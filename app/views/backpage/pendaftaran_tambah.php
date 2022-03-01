<style type="text/css">
  @media only screen and (max-width: 768px) {
    #judul {
      font-size: 2rem;
    }
  }
  @media only screen and (max-width: 425px) {
    #judul {
      font-size: 1.5rem !important;
    }
  }
</style>

<form action="function/pendaftaran_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container">
                <div class="row">

                    <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important;">
                        <h4 class="mbr-section-title display-3" id="judul">Tambah Data Pendaftar</h4>

                        <hr>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Nama Orang Tua/Wali
                                        <input type="text" class="form-control" name="nama_ortu_wali" placeholder="Nama Orang Tua/Wali.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Jenis Kelamin Orang Tua/Wali
                                        <select class="form-control" name="jkel_ortu_wali">
                                          <option selected>Jenis Kelamin Orang Tua/Wali..</option>
                                          <option value="Pria">Pria</option>
                                          <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Hubungan Keluarga Siswa Dengan Ortu/Wali
                                        <select class="form-control" name="id_hubungan_keluarga">
                                          <option selected>Pilih Hubungan Keluarga..</option>
                                          <?php 
                                            $qry2 = "SELECT * FROM ref_hubungan_keluarga";

                                            $dt2 = mysqli_query($mysqli, $qry2);

                                            while($data2 = mysqli_fetch_array($dt2)){
                                           ?>
                                              <option value="<?php echo $data2['id']; ?>"><?php echo $data2['hubungan_keluarga']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Alamat Orang Tua/Wali
                                        <input type="text" class="form-control" name="alamat_ortu_wali" placeholder="Alamat Orang Tua/Wali.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Pekerjaan Orang Tua/Wali
                                        <input type="text" class="form-control" name="pekerjaan_ortu_wali" placeholder="Pekerjaan Orang Tua/Wali.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Nomor HP Orang Tua/Wali
                                        <input type="text" class="form-control" name="no_hp_wa_ortu_wali" placeholder="Nomor HP Orang Tua/Wali.." required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Nama Siswa
                                        <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa.." required>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tempat Lahir Siswa
                                        <input type="text" class="form-control" name="tempat_lahir_siswa" placeholder="Tempat Lahir Siswa.." required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tanggal Lahir Siswa
                                        <input type="date" class="form-control" name="tanggal_lahir_siswa" placeholder="Tanggal Lahir Siswa.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Jenis Kelamin Siswa
                                        <select class="form-control" name="jkel_siswa">
                                          <option selected>Jenis Kelamin Siswa..</option>
                                          <option value="Pria">Pria</option>
                                          <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tingkat Sekolah
                                        <select class="form-control" name="id_ref_sekolah">
                                          <option selected>Pilih Tingkat Sekolah..</option>
                                          <?php 
                                            $qry2 = "SELECT * FROM ref_sekolah";

                                            $dt2 = mysqli_query($mysqli, $qry2);

                                            while($data2 = mysqli_fetch_array($dt2)){
                                           ?>
                                              <option value="<?php echo $data2['id']; ?>"><?php echo $data2['tingkatan_sekolah']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Kelas
                                        <select class="form-control" name="id_ref_kelas">
                                          <option selected>Pilih Kelas..</option>
                                          <?php 
                                            $qry2 = "SELECT 
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

                                            $dt2 = mysqli_query($mysqli, $qry2);

                                            while($data2 = mysqli_fetch_array($dt2)){
                                           ?>
                                              <option value="<?php echo $data2['id']; ?>"><?php echo $data2['detail_kelas']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tingkat Bacaan Iqra/Al-Qur'an
                                        <select class="form-control" name="iqra_alquran">
                                          <option selected>Tingkat Bacaan Iqra/Al-Qur'an..</option>
                                          <option value="0">Iqra</option>
                                          <option value="1">Al-Qur'an</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Status Hidup Ayah
                                        <select class="form-control" name="sts_hidup_ayah">
                                          <option selected>Status Hidup Ayah..</option>
                                          <option value="Hidup">Hidup</option>
                                          <option value="Almarhum">Almarhum</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Status Hidup Ibu
                                        <select class="form-control" name="sts_hidup_ibu">
                                          <option selected>Status Hidup Ibu..</option>
                                          <option value="Hidup">Hidup</option>
                                          <option value="Almarhumah">Almarhumah</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Upload Foto
                                        <input type="file" class="form-control" name="file_name" placeholder="Upload Foto.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tanggal Pendaftaran
                                        <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal Pendaftaran.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class="row">
                                <div class="col-lg-12 text-xs-right" style="margin-bottom: 50px;">
                                    <a class="btn btn-lg btn-info-outline" href="<?php BASEURL; ?>"><span class="fa fa-backward"></span> KEMBALI </a>
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $(function () {
      $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      });
    });
</script>


<script type="text/javascript">
    function onlyNumbers(evt) {
        var e = event || evt;
        var charCode = e.which || e.keyCode;

        if(charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;

    }
</script>