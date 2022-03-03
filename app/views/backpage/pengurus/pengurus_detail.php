<style type="text/css">
  body {
    height: unset;
    padding-bottom: 50px;
  }
  .card {
    margin: 120px auto 0;
    width: 60%;
    padding: 20px;
  }
  .card .card-img-top {
    width: 160px;
    margin-bottom: 30px;
  }
  .text-xs-right {
    margin-top: 10px; 
  }
  @media only screen and (max-width: 768px) {
    .card {
      width: 80%;
    }
  }
  @media only screen and (max-width: 425px) {
    #judul {
      font-size: 1.5rem !important;
    }
  }
</style>

<div class="card">
  <div class="text-center">
    <h5><b>Detail Pengurus</b></h5>
  </div>
  <!-- <div class="text-center">
    <img class="card-img-top" src="foto/<?php// echo $d['file_name']; ?>" alt="Card image cap">
  </div> -->
  <div class="card-body table-responsive">
    <table class="gigo-responsive">
      <tbody>
        <tr>
          <th scope="col">Nipg</th>
          <td scope="col"></td>
        </tr>
        <tr>
          <th scope="row">Nama Pengurus</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Jenis Kelamin Pengurus</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Tempat Lahir Pengurus</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Tanggal Lahir Pengurus</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Umur Pengurus</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Nomor HP Pengurus</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Alamat Pengurus</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Status Mengajar</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Devisi Pengurus</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Jabatan Pengurus</th>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="card-body text-xs-right">
    <a class="btn btn-lg btn-info-outline" href="<?= BASEURL; ?>backpage_pengurus"><span class="fa fa-backward"></span> KEMBALI </a>
    <!-- <a class="btn btn-lg btn-primary" href="santri_cetak.php?nist=<?php echo $d['nist'] ?>" target="_blank"><span class="fa fa-save"></span> CETAK </a> -->
  </div>
</div>

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