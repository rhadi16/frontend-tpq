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
    <img class="card-img-top" src="foto/" alt="Card image cap">
  </div>
  <div class="card-body table-responsive">
    <table class="gigo-responsive">
      <tbody>
        <tr>
          <th scope="col">Nama Orang Tua/Wali</th>
          <td scope="col"></td>
        </tr>
        <tr>
          <th scope="row">Jenis Kelamin Orang Tua/Wali</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Hubungan Keluarga Santri Dengan Ortu/Wali</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Alamat Orang Tua/Wali</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Pekerjaan Orang Tua/Wali</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Nomor HP Orang Tua/Wali</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Nama Siswa</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Tempat Lahir Siswa</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Tanggal Lahir Siswa</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Jenis Kelamin Siswa</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Umur Siswa</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Tingkat Sekolah</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Kelas</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Tingkat Bacaan</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Status Hidup Ayah</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Status Hidup Ibu</th>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Tanggal Pendaftaran</th>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="card-body text-xs-right">
    <a class="btn btn-lg btn-info-outline" href="<?= BASEURL; ?>backpage_pendaftaran"><span class="fa fa-backward"></span> KEMBALI </a>
    <a class="btn btn-lg btn-primary" href="<?= BASEURL; ?>backpage_pendaftaran/cetak" target="_blank"><span class="fa fa-save"></span> CETAK </a>
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
    console.log("erger");
</script>