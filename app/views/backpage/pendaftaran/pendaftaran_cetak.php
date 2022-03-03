<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?= BASEURL; ?>backpage/assets/gambar/logo-tpa.png" type="image/x-icon">

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
				<img src="<?= BASEURL; ?>backpage/assets/gambar/logo-tpa.png">
			</div>
			<div class="text-header">
				<h5>TAMAN PENDIDIKAN AL-QUR'AN</h5>
				<h5>MASJID NURUL ISHLAH</h5>
				<h6>Kecamatan Kelurahan Kab/Kota</h6>
				<p></p>
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
			          <td scope="col"></td>
			          <td scope="col" rowspan="5" class="cell-img"><img src="foto/"></td>
			        </tr>
			        <tr>
			          <th scope="row">Tempat, Tanggal Lahir</th>
			          <td>,</td>
			        </tr>
			        <tr>
			          <th scope="row">Jenis Kelamin</th>
			          <td></td>
			        </tr>
			        <tr>
			          <th scope="row">Umur Pendaftar</th>
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
			          <td colspan="2"></td>
			        </tr>
			        <tr>
			          <th scope="row">Status Hidup Orang Tua</th>
			          <td colspan="2">Ayah , Ibu </td>
			        </tr>
			        <tr>
			          <th scope="row">Tanggal Pendaftaran</th>
			          <td colspan="2"></td>
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
			          <td scope="col"></td>
			        </tr>
			        <tr>
			          <th scope="row">Hubungan Keluarga Dengan Pendaftar</th>
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
				<p><b>Rhadi</b></p>
			</div>
		</div>
	</div>

</body>
</html>