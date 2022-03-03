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

<form action="function/pengurus_func.php?action=update" id="form_proposal" enctype="multipart/form-data" method="post">

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="row">

                    <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important;">
                        <h4 class="mbr-section-title display-3" id="judul">Edit Data Pengurus</h4>

                        <hr>

                        <input type="hidden" name="nipg1" value="">

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nipg
                                        <input type="text" class="form-control" name="nipg" placeholder="Nipg.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nama Pengurus
                                        <input type="text" class="form-control" name="nama" placeholder="Nama.." required value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Jenis Kelamin Pengurus
                                        <select class="form-control" name="jenis_kelamin" required>
                                          <option selected>Jenis Kelamin Pengurus..</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tempat Lahir Pengurus
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir Pengurus.." required value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Tanggal Lahir Pengurus
                                        <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir Pengurus.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nomor HP Pengurus
                                        <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP Pengurus.." required value="">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Alamat Pengurus
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Pengurus.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Status Mengajar
                                        <select class="form-control" name="sts_pengajar" required>
                                          <option selected>Status Mengajar..</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Devisi Pengurus
                                        <select class="form-control" name="id_devisi">
                                          <option selected>Pilih Devisi Pengurus..</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Jabatan Pengurus
                                        <select class="form-control" name="id_jabatan">
                                          <option selected>Pilih Jabatan Pengurus..</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-12 text-xs-right">
                                    <a class="btn btn-lg btn-info-outline" href="<?php BASEURL; ?>backpage_pengurus"><span class="fa fa-backward"></span> KEMBALI </a>
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