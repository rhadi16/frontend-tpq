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
  body {
    height: unset;
    padding-bottom: 50px;
  }
</style>

<form action="function/santri_func.php?action=update" id="form_proposal" enctype="multipart/form-data" method="post">

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="row">

                    <div class="mbr-section col-md-12 col-lg-offset-4 col-lg-8 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important;">
                        <h4 class="mbr-section-title display-3" id="judul">Edit Data Santri</h4>

                        <hr>

                        <input type="hidden" name="nist1" value="<?php echo $d['nist']; ?>">

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nist
                                        <input type="text" class="form-control" name="nist" placeholder="Nist.." required value="<?php echo $d['nist']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nama Siswa
                                        <input type="text" class="form-control" name="nama" placeholder="Nama.." required value="<?php echo $d['nama']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
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

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tempat Lahir
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir.." required value="<?php echo $d['tempat_lahir']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tanggal Lahir
                                        <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir.." required value="<?php echo $d['tgl_lahir']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tingkatan Sekolah
                                        <select class="form-control" name="id_ref_sekolah">
                                          <option selected>Pilih Tingkatan Sekolah..</option>
                                          <?php 
                                            $qry1 = "SELECT * FROM ref_sekolah";

                                            $dt1 = mysqli_query($mysqli, $qry1);

                                            while($data1 = mysqli_fetch_array($dt1)){
                                           ?>
                                              <option value="<?php echo $data1['id']; ?>"
                                                <?php if($d['id_ref_sekolah']==$data1['id']){ echo 'selected';} ?>
                                              ><?php echo $data1['tingkatan_sekolah']; ?></option>
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
                                        Kelas
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
                                                <?php if($d['id_ref_kelas']==$data1['id']){ echo 'selected';} ?>
                                              ><?php echo $data1['detail_kelas']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                </div>

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
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Upload Foto
                                        <input type="file" class="form-control" name="file_name" placeholder="Upload Foto..">
                                        <input type="hidden" name="file_name_sebelum" value="<?php echo $d['file_name']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nama Orang Tua/Wali
                                        <input type="text" class="form-control" name="nama_ortu_wali" placeholder="Nama Orang Tua/Wali.." required value="<?php echo $d['nama_ortu_wali']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
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
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Alamat Orang Tua/Wali
                                        <input type="text" class="form-control" name="alamat_ortu_wali" placeholder="Alamat Orang Tua/Wali.." required value="<?php echo $d['alamat_ortu_wali']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Pekerjaan Orang Tua/Wali
                                        <input type="text" class="form-control" name="pekerjaan_ortu_wali" placeholder="Pekerjaan Orang Tua/Wali.." required value="<?php echo $d['pekerjaan_ortu_wali']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nomor HP Orang Tua/Wali
                                        <input type="text" class="form-control" name="no_hp_wa_ortu_wali" placeholder="Nomor HP Orang Tua/Wali.." required value="<?php echo $d['no_hp_wa_ortu_wali']; ?>">
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
                                        Tanggal Pendaftaran
                                        <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal Pendaftaran.." required value="<?php echo $d['tgl_pendaftaran']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-12 text-xs-right">
                                    <a class="btn btn-lg btn-info-outline" href="<?php BASEURL; ?>backpage_santri"><span class="fa fa-backward"></span> KEMBALI </a>
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