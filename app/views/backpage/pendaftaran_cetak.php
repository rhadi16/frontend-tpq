<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="assets/gambar/<?php echo $d1['nama_logo']; ?>" type="image/x-icon">

	<title>Data Pendaftar</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.kertas {
			width: 800px;
			padding: 5px 50px;
			margin: 20px auto;
			position: relative;
		}

		.logo img {
			width: 130px;
		}

		.kertas .header {
			display: flex;
			align-items: center;
			text-align: center;
			border-bottom: 3px solid black;
			margin-bottom: 34px;
		}
		.kertas .header .logo {
			width: 25%;
		}
		.kertas .header .text-header {
			width: 75%;
		}
		.kertas .header .text-header h5 {
			font-size: 1.5rem;
			margin-left: -55px;
		}
		.kertas .header .text-header h6 {
			font-size: 0.87rem;
			margin-left: -55px;
		}
		.kertas .header .text-header p {
			margin-left: -55px;
		}

		.kertas .body {
			/*display: flex;
			justify-content: space-around;*/
			padding: 0 20px;
		}

		.data .table {
			width: 100%;
			border: 1px solid black;
			border-collapse: collapse;
			margin-bottom: 40px;
		}
		.data .table tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		.data .table img {
			width: 130px;
		}
		.data .table .cell-img {
			border: 1px solid black;
			text-align: center;
		}
		.data .table th,
		.data .table td {
			border-bottom: 1px solid grey;
			padding: 10px 30px;
			text-align: left;
		}

		.footer {
			display: flex;
			justify-content: space-between;
			text-align: center;
			padding: 0 30px;
		}
	</style>
</head>
<body>

	<div class="kertas">
		<div class="header">
			<div class="logo">
				<img src="assets/gambar/<?php echo $d1['nama_logo']; ?>">
			</div>
			<div class="text-header">
				<h5>TAMAN PENDIDIKAN AL-QUR'AN</h5>
				<h5>MASJID NURUL ISHLAH</h5>
				<h6>Kecamatan <?php echo $d2['kecamatan']; ?> Kelurahan <?php echo $d2['kelurahan']; ?> Kab/Kota <?php echo $d2['kab_kota']; ?></h6>
				<p><?php echo $d2['alamat']; ?></p>
			</div>
		</div>

		<div class="body">
			<div class="data">
				<table class="table" cellspacing="0">
				  <tbody>
				  	<tr>
				  		<th colspan="3" style="text-align: center; font-size: 1.3rem;"><b>Data Pendaftar</b></th>
				  	</tr>
			        <tr>
			          <th scope="col">Nama Pendaftar</th>
			          <td scope="col"><?php echo $d['nama_siswa']; ?></td>
			          <td scope="col" rowspan="5" class="cell-img"><img src="foto/<?php echo $d['file_name']; ?>"></td>
			        </tr>
			        <tr>
			          <th scope="row">Tempat, Tanggal Lahir</th>
			          <td><?php echo $d['tempat_lahir_siswa']; ?>, <?php echo datetimeFormat::TanggalIndo($d['tanggal_lahir_siswa']); ?></td>
			        </tr>
			        <tr>
			          <th scope="row">Jenis Kelamin</th>
			          <td><?php echo $d['jkel_siswa']; ?></td>
			        </tr>
			        <tr>
			          <th scope="row">Umur Pendaftar</th>
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
			                echo '<td colspan="2">'.$data2['detail_kelas'].'</td>';
			              } ?>
			          <?php } ?>
			        </tr>
			        <tr>
			          <th scope="row">Tingkat Bacaan</th>
			          <td colspan="2">
			              <?php if($d['iqra_alquran']==0){ 
			                echo 'Iqra';
			              }else{
			                echo 'Al-Qur\'an';
			              } ?>
			          </td>
			        </tr>
			        <tr>
			          <th scope="row">Status Hidup Orang Tua</th>
			          <td colspan="2">Ayah <?php echo $d['sts_hidup_ayah']; ?>, Ibu <?php echo $d['sts_hidup_ayah']; ?></td>
			        </tr>
			        <tr>
			          <th scope="row">Tanggal Pendaftaran</th>
			          <td colspan="2"><?php echo datetimeFormat::TanggalIndo($d['tgl_pendaftaran']); ?></td>
			        </tr>
			      </tbody>
				</table>

				<table class="table" cellspacing="0">
				  <tbody>
				  	<tr>
				  		<th colspan="2" style="text-align: center; font-size: 1.3rem;"><b>Data Orang Tua/Wali</b></th>
				  	</tr>
			        <tr>
			          <th scope="col">Nama Orang Tua/Wali</th>
			          <td scope="col">
			          	<?php if ($d['jkel_ortu_wali'] == "Pria") {
			          		echo 'Bapak';
			          	}else{
			          		echo 'Ibu';
			          	} ?>
			          	<?php echo $d['nama_ortu_wali']; ?>		
			          </td>
			        </tr>
			        <tr>
			          <th scope="row">Hubungan Keluarga Dengan Pendaftar</th>
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
			      </tbody>
				</table>
			</div>
		</div>

		<div class="footer">
			<div class="ttd-kiri">
				<p></p>
				<br>
				<br>
				<br>
				<p></p>
			</div>
			<div class="ttd-kanan">
				<p><b>Ketua TPQ</b></p>
				<br>
				<br>
				<br>
				<p><b><?php echo $d2['ttd_ketua']; ?></b></p>
			</div>
		</div>
	</div>

</body>
</html>