<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>DIGITAL TK-TPA</title>
	<link rel="shortcut icon" href="<?php BASEURL; ?>gambar/logo-tpa.png" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php BASEURL; ?>css/my-login.css">
</head>

<style type="text/css">
   .modal.fade {
      transition: opacity 0.3s linear;
   }
</style>

<body class="my-login-page" style="background-color: #a1887f">

	<div class="container">
		<div class="card">
		  <div class="card-header">
		    <h5>Form Pendaftaran Santri</h5>
		    <h6> <a href="<?= BASEURL; ?>" class="btn btn-primary"><< Kembali Ke Halaman Utama</a></h6>
		  </div>
		  <div class="card-body">
		    <form action="daftar_luar_func.php?action=insert" id="form_proposal" enctype="multipart/form-data" method="post">
			  <div class="form-group">
			    <label for="nama_ortu_wali">Nama Orang Tua/Wali</label>
			    <input type="text" class="form-control" name="nama_ortu_wali" placeholder="Nama Orang Tua/Wali.." id="nama_ortu_wali" required>
			  </div>

			  <div class="form-group">
			    <label for="jkel_ortu_wali">Jenis Kelamin Orang Tua/Wali</label>
			    <select class="form-control" name="jkel_ortu_wali" id="jkel_ortu_wali" required>
                  <option selected>Jenis Kelamin Orang Tua/Wali..</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
			  </div>

			  <div class="form-group">
                <label for="id_hubungan_keluarga">Hubungan Keluarga Santri Dengan Ortu/Wali</label>
                <select class="form-control" name="id_hubungan_keluarga" id="id_hubungan_keluarga" required>
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

            <div class="form-group">
                <label for="alamat_ortu_wali">Alamat Orang Tua/Wali</label>
                <input type="text" class="form-control" name="alamat_ortu_wali" placeholder="Alamat Orang Tua/Wali.." id="alamat_ortu_wali" required>
            </div>

				<div class="form-group">
                <label for="pekerjaan_ortu_wali">Pekerjaan Orang Tua/Wali</label>
                <input type="text" class="form-control" name="pekerjaan_ortu_wali" placeholder="Pekerjaan Orang Tua/Wali.." id="pekerjaan_ortu_wali" required>
            </div>

            <div class="form-group">
                <label for="no_hp_wa_ortu_wali">Nomor HP Orang Tua/Wali</label>
                <input type="text" class="form-control" name="no_hp_wa_ortu_wali" placeholder="Nomor HP Orang Tua/Wali.." id="no_hp_wa_ortu_wali" required>
            </div>

            <div class="form-group">
                <label for="nama_santri">Nama Santri</label>
                <input type="text" class="form-control" name="nama_santri" placeholder="Nama Santri.." id="nama_santri" required>
            </div>

            <div class="form-group">
                <label for="tempat_lahir_santri">Tempat Lahir Santri</label>
                <input type="text" class="form-control" name="tempat_lahir_santri" placeholder="Tempat Lahir Santri.." id="tempat_lahir_santri" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir_santri">Tanggal Lahir Santri</label>
                <input type="date" class="form-control" name="tanggal_lahir_santri" placeholder="Tanggal Lahir Santri.." id="tanggal_lahir_santri" required>
            </div>

            <div class="form-group">
                <label for="jkel_santri">Jenis Kelamin Santri</label>
                <select class="form-control" name="jkel_santri" id="jkel_santri" required>
                  <option selected>Jenis Kelamin Santri..</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
            </div>

            <div class="form-group">
                <label for="id_ref_sekolah">Tingkat Sekolah</label>
                <select class="form-control" name="id_ref_sekolah" id="id_ref_sekolah" required>
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

            <div class="form-group">
                <label for="id_ref_kelas">Kelas</label>
                <select class="form-control" name="id_ref_kelas" id="id_ref_kelas" required>
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

            <div class="form-group">
                <label for="iqra_alquran">Tingkat Bacaan Iqra/Al-Qur'an</label>
                <select class="form-control" name="iqra_alquran" id="iqra_alquran" required>
                  <option selected>Tingkat Bacaan Iqra/Al-Qur'an..</option>
                  <option value="0">Iqra</option>
                  <option value="1">Al-Qur'an</option>
                </select>
            </div>

            <div class="form-group">
                <label for="sts_hidup_ayah">Status Hidup Ayah</label>
                <select class="form-control" name="sts_hidup_ayah" id="sts_hidup_ayah" required>
                  <option selected>Status Hidup Ayah..</option>
                  <option value="Hidup">Hidup</option>
                  <option value="Almarhum">Almarhum</option>
                </select>
            </div>

            <div class="form-group">
                <label for="sts_hidup_ibu">Status Hidup Ibu</label>
                <select class="form-control" name="sts_hidup_ibu" id="sts_hidup_ibu" required>
                  <option selected>Status Hidup Ibu..</option>
                  <option value="Hidup">Hidup</option>
                  <option value="Almarhumah">Almarhumah</option>
                </select>
            </div>

            <div class="form-group">
                <label for="file_name">Upload Foto</label>
                <input type="file" class="form-control" name="file_name" placeholder="Upload Foto.." id="file_name" required>
            </div>

            <div class="form-group">
                <label for="tgl_pendaftaran">Tanggal Pendaftaran</label>
                <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal Pendaftaran.." id="tgl_pendaftaran" required>
            </div>

            <button type="button" class="btn btn-primary float-right mr-3 confirmation">DAFTAR</button>
			</form>
		  </div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php BASEURL; ?>frontpage/lib/sweetalert/sweetalert2.all.min.js"></script>
	<script src="<?php BASEURL; ?>frontpage/js/script-pendaftaran-luar.js"></script>

</body>
</html>
