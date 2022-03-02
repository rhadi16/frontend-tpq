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

<form action="function/pendaftaran_func.php?action=update" id="form_proposal" enctype="multipart/form-data" method="post">

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="row">

                    <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important;">
                        <h4 class="mbr-section-title display-3" id="judul">Edit Data Pendaftar</h4>

                        <hr>

                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nama Orang Tua/Wali
                                        <input type="text" class="form-control" name="nama_ortu_wali" placeholder="Nama Orang Tua/Wali.." required value="<?php echo $d['nama_ortu_wali']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Jenis Kelamin Orang Tua/Wali
                                        <select class="form-control" name="jkel_ortu_wali">
                                          <option selected>Jenis Kelamin Orang Tua/Wali..</option>
                                          <option value="Pria"
                                           <?php if($d['jkel_ortu_wali']=="Pria"){ echo 'selected';} ?>
                                          >Pria</option>
                                          <option value="Wanita"
                                           <?php if($d['jkel_ortu_wali']=="Wanita"){ echo 'selected';} ?>
                                          >Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Hubungan Keluarga Siswa Dengan Ortu/Wali
                                        <select class="form-control" name="id_hubungan_keluarga">
                                          <option selected>Pilih Hubungan Keluarga..</option>
                                          <?php 
                                            $qry1 = "SELECT * FROM ref_hubungan_keluarga";

                                            $dt1 = mysqli_query($mysqli, $qry1);

                                            while($data1 = mysqli_fetch_array($dt1)){
                                           ?>
                                              <option value="<?php echo $data1['id']; ?>"
                                                <?php if($d['id_hubungan_keluarga']==$data1['id']){ echo 'selected';} ?>
                                              ><?php echo $data1['hubungan_keluarga']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Alamat Orang Tua/Wali
                                        <input type="text" class="form-control" name="alamat_ortu_wali" placeholder="Alamat Orang Tua/Wali.." required value="<?php echo $d['alamat_ortu_wali']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Pekerjaan Orang Tua/Wali
                                        <input type="text" class="form-control" name="pekerjaan_ortu_wali" placeholder="Pekerjaan Orang Tua/Wali.." required value="<?php echo $d['pekerjaan_ortu_wali']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nomor HP Orang Tua/Wali
                                        <input type="text" class="form-control" name="no_hp_wa_ortu_wali" placeholder="Nomor HP Orang Tua/Wali.." required value="<?php echo $d['no_hp_wa_ortu_wali']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nama Siswa
                                        <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa.." required value="<?php echo $d['nama_siswa']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tempat Lahir Siswa
                                        <input type="text" class="form-control" name="tempat_lahir_siswa" placeholder="Tempat Lahir Siswa.." required value="<?php echo $d['tempat_lahir_siswa']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tanggal Lahir Siswa
                                        <input type="date" class="form-control" name="tanggal_lahir_siswa" placeholder="Tanggal Lahir Siswa.." required value="<?php echo $d['tanggal_lahir_siswa']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Jenis Kelamin Siswa
                                        <select class="form-control" name="jkel_siswa">
                                          <option selected>Jenis Kelamin Siswa..</option>
                                          <option value="Pria"
                                           <?php if($d['jkel_siswa']=="Pria"){ echo 'selected';} ?>
                                          >Pria</option>
                                          <option value="Wanita"
                                           <?php if($d['jkel_siswa']=="Wanita"){ echo 'selected';} ?>
                                          >Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tingkat Sekolah
                                        <select class="form-control" name="id_ref_sekolah">
                                          <option selected>Pilih Tingkatan Sekolah..</option>
                                          <?php 
                                            $qry2 = "SELECT * FROM ref_sekolah";

                                            $dt2 = mysqli_query($mysqli, $qry2);

                                            while($data2 = mysqli_fetch_array($dt2)){
                                           ?>
                                              <option value="<?php echo $data2['id']; ?>"
                                                <?php if($d['id_ref_sekolah']==$data2['id']){ echo 'selected';} ?>
                                              ><?php echo $data2['tingkatan_sekolah']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Kelas
                                        <select class="form-control" name="id_ref_kelas">
                                          <option selected>Pilih Kelas..</option>
                                          <?php 
                                            $qry3 = "SELECT 
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

                                            $dt3 = mysqli_query($mysqli, $qry3);

                                            while($data3 = mysqli_fetch_array($dt3)){
                                           ?>
                                              <option value="<?php echo $data3['id']; ?>"
                                                <?php if($d['id_ref_kelas']==$data3['id']){ echo 'selected';} ?>
                                              ><?php echo $data3['detail_kelas']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Iqra/Al-Qur'an
                                        <select class="form-control" name="iqra_alquran">
                                          <option selected>Tingkat Bacaan..</option>
                                          <option value="0"
                                           <?php if($d['iqra_alquran']==0){ echo 'selected';} ?>
                                          >Iqra</option>
                                          <option value="1"
                                           <?php if($d['iqra_alquran']==1){ echo 'selected';} ?>
                                          >Al-Qur'an</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Status Hidup Ayah
                                        <select class="form-control" name="sts_hidup_ayah">
                                          <option selected>Status Hidup Ayah..</option>
                                          <option value="Hidup"
                                           <?php if($d['sts_hidup_ayah']=="Hidup"){ echo 'selected';} ?>
                                          >Hidup</option>
                                          <option value="Almarhum"
                                           <?php if($d['sts_hidup_ayah']=="Almarhum"){ echo 'selected';} ?>
                                          >Almarhum</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Status Hidup Ibu
                                        <select class="form-control" name="sts_hidup_ibu">
                                          <option selected>Status Hidup Ibu..</option>
                                          <option value="Hidup"
                                           <?php if($d['sts_hidup_ibu']=="Hidup"){ echo 'selected';} ?>
                                          >Hidup</option>
                                          <option value="Almarhumah"
                                           <?php if($d['sts_hidup_ibu']=="Almarhumah"){ echo 'selected';} ?>
                                          >Almarhumah</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Upload Foto
                                        <input type="file" class="form-control" name="file_name" placeholder="Upload Foto..">
                                        <input type="hidden" name="file_name_sebelum" value="<?php echo $d['file_name']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tanggal Pendaftaran
                                        <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal Pendaftaran.." required value="<?php echo $d['tgl_pendaftaran']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-12 text-xs-right" style="margin-bottom: 50px;">
                                    <a class="btn btn-lg btn-info-outline" href="<?php BASEURL; ?>backpage_pendaftaran"><span class="fa fa-backward"></span> KEMBALI </a>
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