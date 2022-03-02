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
    <img class="card-img-top" src="foto/<?php echo $d['file_name']; ?>" alt="Card image cap">
  </div>
  <div class="card-body table-responsive">
    <table class="gigo-responsive">
      <tbody>
        <tr>
          <th scope="col">Nama Orang Tua/Wali</th>
          <td scope="col"><?php echo $d['nama_ortu_wali']; ?></td>
        </tr>
        <tr>
          <th scope="row">Jenis Kelamin Orang Tua/Wali</th>
          <td><?php echo $d['jkel_ortu_wali']; ?></td>
        </tr>
        <tr>
          <th scope="row">Hubungan Keluarga Santri Dengan Ortu/Wali</th>
          <?php 
            $qry3 = "SELECT * FROM ref_hubungan_keluarga";

            $dt3 = mysqli_query($mysqli, $qry3);

            while($data3 = mysqli_fetch_array($dt3)){
           ?>
              <?php if($d['id_hubungan_keluarga']==$data3['id']){ 
                echo '<td>'.$data3['hubungan_keluarga'].'</td>';
              } ?>
          <?php } ?>
        </tr>
        <tr>
          <th scope="row">Alamat Orang Tua/Wali</th>
          <td><?php echo $d['alamat_ortu_wali']; ?></td>
        </tr>
        <tr>
          <th scope="row">Pekerjaan Orang Tua/Wali</th>
          <td><?php echo $d['pekerjaan_ortu_wali']; ?></td>
        </tr>
        <tr>
          <th scope="row">Nomor HP Orang Tua/Wali</th>
          <td><?php echo $d['no_hp_wa_ortu_wali']; ?></td>
        </tr>
        <tr>
          <th scope="row">Nama Siswa</th>
          <td><?php echo $d['nama_siswa']; ?></td>
        </tr>
        <tr>
          <th scope="row">Tempat Lahir Siswa</th>
          <td><?php echo $d['tempat_lahir_siswa']; ?></td>
        </tr>
        <tr>
          <th scope="row">Tanggal Lahir Siswa</th>
          <td><?php echo datetimeFormat::TanggalIndo($d['tanggal_lahir_siswa']); ?></td>
        </tr>
        <tr>
          <th scope="row">Jenis Kelamin Siswa</th>
          <td><?php echo $d['jkel_siswa']; ?></td>
        </tr>
        <tr>
          <th scope="row">Umur Siswa</th>
          <td><?php echo $umur_siswa; ?></td>
        </tr>
        <tr>
          <th scope="row">Tingkat Sekolah</th>
          <?php 
            $qry1 = "SELECT * FROM ref_sekolah";

            $dt1 = mysqli_query($mysqli, $qry1);

            while($data1 = mysqli_fetch_array($dt1)){
           ?>
              <?php if($d['id_ref_sekolah']==$data1['id']){ 
                echo '<td>'.$data1['tingkatan_sekolah'].'</td>';
              } ?>
          <?php } ?>
        </tr>
        <tr>
          <th scope="row">Kelas</th>
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
              <?php if($d['id_ref_kelas']==$data2['id']){ 
                echo '<td>'.$data2['detail_kelas'].'</td>';
              } ?>
          <?php } ?>
        </tr>
        <tr>
          <th scope="row">Tingkat Bacaan</th>
          <td>
              <?php if($d['iqra_alquran']==0){ 
                echo 'Iqra';
              }else{
                echo 'Al-Qur\'an';
              } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">Status Hidup Ayah</th>
          <td><?php echo $d['sts_hidup_ayah']; ?></td>
        </tr>
        <tr>
          <th scope="row">Status Hidup Ibu</th>
          <td><?php echo $d['sts_hidup_ibu']; ?></td>
        </tr>
        <tr>
          <th scope="row">Tanggal Pendaftaran</th>
          <td><?php echo datetimeFormat::TanggalIndo($d['tgl_pendaftaran']); ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="card-body text-xs-right">
    <a class="btn btn-lg btn-info-outline" href="<?php BASEURL; ?>backpage_pendaftaran"><span class="fa fa-backward"></span> KEMBALI </a>
    <a class="btn btn-lg btn-primary" href="pendaftaran_cetak.php" target="_blank"><span class="fa fa-save"></span> CETAK </a>
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