<form action="function/donatur_func.php?action=update" id="form_proposal" enctype="multipart/form-data" method="post">

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">

            <div class="container">                
                <div class="row">

                    <div class="mbr-section col-md-12 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important;">
                        <h4 class="mbr-section-title display-3" id="judul">Edit Data Pemberian</h4>

                        <hr>

                        <input type="hidden" name="id" value="">

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Nama Pemberi
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Pemberi.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Alamat Pemberi
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Pemberi.." required value="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Pekerjaan Pemberi
                                        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan Pemberi.." required value="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        Bentuk Pemberi
                                        <select class="form-control" name="bentuk_donasi" id="bentuk_donasi" required>
                                          <option value="UANG" <?php if($d['bentuk_donasi']=="UANG"){ echo 'selected';} ?>>UANG</option>
                                          <option value="SPIDOL" <?php if($d['bentuk_donasi']=="SPIDOL"){ echo 'selected';} ?>>SPIDOL</option>
                                          <option value="PAPAN TULIS" <?php if($d['bentuk_donasi']=="PAPAN TULIS"){ echo 'selected';} ?>>PAPAN TULIS</option>
                                          <option value="BUKU" <?php if($d['bentuk_donasi']=="BUKU"){ echo 'selected';} ?>>BUKU</option>
                                          <option value="BAJU" <?php if($d['bentuk_donasi']=="BAJU"){ echo 'selected';} ?>>BAJU</option>
                                          <option value="SONGKOK" <?php if($d['bentuk_donasi']=="SONGKOK"){ echo 'selected';} ?>>SONGKOK</option>
                                          <option value="MUKENA" <?php if($d['bentuk_donasi']=="MUKENA"){ echo 'selected';} ?>>MUKENA</option>
                                          <option value="MEJA" <?php if($d['bentuk_donasi']=="MEJA"){ echo 'selected';} ?>>MEJA</option>
                                          <option value="SENDAL" <?php if($d['bentuk_donasi']=="SENDAL"){ echo 'selected';} ?>>SENDAL</option>
                                          <option value="AL QURAN" <?php if($d['bentuk_donasi']=="AL QURAN"){ echo 'selected';} ?>>AL QURAN</option>
                                          <option value="LAIN-LAIN" <?php if($d['bentuk_donasi']=="LAIN-LAIN"){ echo 'selected';} ?>>LAIN-LAIN</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group" style="display: none;" id="jumlah_uang">
                                        Jumlah Uang
                                        <input type="number" class="form-control" placeholder="Jumlah Uang Pemberi" id="jumlah_uang_val" name="jumlah_uang" value="" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group" style="display: none;" id="benda_pemberian">
                                        Benda Pemberian
                                        <input type="text" class="form-control" placeholder="Benda Pemberian" id="benda_pemberian_val" name="benda_pemberian" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tanggal Terima Donasi
                                        <input type="date" class="form-control" name="tgl_diterima_donasi" placeholder="Tanggal Terima Donasi.." required value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-12 text-xs-right">
                                    <a class="btn btn-lg btn-info-outline" href="<?php BASEURL; ?>backpage_donatur"><span class="fa fa-backward"></span> KEMBALI </a>
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

    $(document).on('ready', function(){

      if($('#bentuk_donasi').val() == "UANG"){
        
        $('#jumlah_uang').show(300);
        $('#benda_pemberian').hide(300);

      }else if($('#bentuk_donasi').val() == "LAIN-LAIN"){
        
        $('#jumlah_uang').hide(300);
        $('#benda_pemberian').show(300);

      }else{

        $('#jumlah_uang').hide(300);
        $('#benda_pemberian').hide(300);

      }

    });

    $('#bentuk_donasi').on('change', function(){

      if($('#bentuk_donasi').val() == "UANG"){
        
        $('#jumlah_uang').show(300);
        $('#benda_pemberian').hide(300);

        $('#jumlah_uang_val').val("0");
        $('#benda_pemberian_val').val("-");
        
      }else if($('#bentuk_donasi').val() == "LAIN-LAIN"){
        
        $('#jumlah_uang').hide(300);
        $('#benda_pemberian').show(300);

        $('#jumlah_uang_val').val("0");
        $('#benda_pemberian_val').val("-");

      }else{

        $('#jumlah_uang').hide(300);
        $('#benda_pemberian').hide(300);

        $('#jumlah_uang_val').val("0");
        $('#benda_pemberian_val').val("-");

      }

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