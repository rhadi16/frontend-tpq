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

                        <input type="hidden" name="id" value="">

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nama Orang Tua/Wali
                                        <input type="text" class="form-control" name="nama_ortu_wali" placeholder="Nama Orang Tua/Wali.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Jenis Kelamin Orang Tua/Wali
                                        <select class="form-control" name="jkel_ortu_wali">
                                          <option selected>Jenis Kelamin Orang Tua/Wali..</option>
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
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Alamat Orang Tua/Wali
                                        <input type="text" class="form-control" name="alamat_ortu_wali" placeholder="Alamat Orang Tua/Wali.." required value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Pekerjaan Orang Tua/Wali
                                        <input type="text" class="form-control" name="pekerjaan_ortu_wali" placeholder="Pekerjaan Orang Tua/Wali.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nomor HP Orang Tua/Wali
                                        <input type="text" class="form-control" name="no_hp_wa_ortu_wali" placeholder="Nomor HP Orang Tua/Wali.." required value="">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nama Siswa
                                        <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tempat Lahir Siswa
                                        <input type="text" class="form-control" name="tempat_lahir_siswa" placeholder="Tempat Lahir Siswa.." required value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tanggal Lahir Siswa
                                        <input type="date" class="form-control" name="tanggal_lahir_siswa" placeholder="Tanggal Lahir Siswa.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Jenis Kelamin Siswa
                                        <select class="form-control" name="jkel_siswa">
                                          <option selected>Jenis Kelamin Siswa..</option>
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
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Kelas
                                        <select class="form-control" name="id_ref_kelas">
                                          <option selected>Pilih Kelas..</option>
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
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Status Hidup Ayah
                                        <select class="form-control" name="sts_hidup_ayah">
                                          <option selected>Status Hidup Ayah..</option>
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
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Upload Foto
                                        <input type="file" class="form-control" name="file_name" placeholder="Upload Foto..">
                                        <input type="hidden" name="file_name_sebelum" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tanggal Pendaftaran
                                        <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal Pendaftaran.." required value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-12 text-xs-right" style="margin-bottom: 50px;">
                                    <a class="btn btn-lg btn-info-outline" href="<?= BASEURL; ?>backpage_pendaftaran"><span class="fa fa-backward"></span> KEMBALI </a>
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