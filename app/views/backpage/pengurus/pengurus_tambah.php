<form action="function/pengurus_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container">
                <div class="row">

                    <div class="mbr-section col-md-12 col-lg-offset-4 col-lg-8 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important;">
                        <h4 class="mbr-section-title display-3">Tambah Data Pengurus</h4>

                        <hr>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        NIPG
                                        <input type="text" class="form-control" name="nipg" id="nipg" placeholder="NIPG.." readonly required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Nama Pengurus
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pengurus.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Jenis Kelamin Pengurus
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                          <option selected>Jenis Kelamin Pengurus..</option>
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
                                        Tempat Lahir Pengurus
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir Pengurus.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tanggal Lahir Pengurus
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir Pengurus.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Nomor HP Pengurus
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP Pengurus.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Alamat Pengurus
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Pengurus.." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Status Mengajar
                                        <select class="form-control" name="sts_pengajar" id="sts_pengajar" required>
                                          <option selected>Pilih Status Mengajar..</option>
                                          <option value="Mengajar">Mengajar</option>
                                          <option value="Tidak Mengajar">Tidak Mengajar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Devisi
                                        <select class="form-control" name="id_devisi" id="id_devisi" required>
                                          <option selected>Pilih Devisi Pengurus..</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Jabatan
                                        <select class="form-control" name="id_jabatan" id="id_jabatan" required="">
                                          <option selected>Pilih Jabatan Pengurus..</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
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
  
  $(document).ready(function(){
                                   
    $.ajax({
        url: "api/get_nipg.php",
        success: function(data){
        var arr = jQuery.parseJSON( data );
                                    
        $('#nipg').val(arr.nipg_baru);
      },  error: function(error){
      alert(error);
      }
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