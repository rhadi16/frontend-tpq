<?php

	include '../plugin/datetime_format/datetimeFormat.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>REKAP PEMBAYARAN IURAN SANTRI</title>
</head>
<style type="text/css">
	* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "calibri";
    }
    .main {
    	width: 1100px;
    	margin: 0 auto;
    	padding: 10px 0;
    }

    .header {
    	text-align: center;
    	margin-bottom: 20px;
    }
    .header h2 {
    	margin-bottom: 10px;
    	font-size: 1.4rem;
    }
    .header h6 {
    	font-size: 1.2rem;
    	font-weight: 500;
    }

    .detail-hadir {
    	margin-bottom: 50px;
    }
    .detail-hadir table {
    	width: 100%;
    	border-collapse: collapse;
    	font-size: 11px;
    }
    .detail-hadir table tr td,
    .detail-hadir table tr th {
    	border: 1px solid black;
    	text-align: center;
    	padding: 3px 0;
    }

    .keterangan table {
    	width: 100%;
    	border-collapse: collapse;
    }
    .keterangan table tr td,
    .keterangan table tr th {
    	border: 1px solid black;
    	text-align: center;
    	padding: 5px;
    }

    hr{
    	border: 1px solid black;
    }

    .bg-hadir{
    	background-color: green; color: white;padding: 10px;
    }
    .bg-tak{
    	background-color: red; color: white;padding: 10px;
    }
    .bg-ijin{
    	background-color: blue; color: white;padding: 10px;
    }
    .bg-sakit{
    	background-color: purple; color: white;padding: 10px;
    }
    .bg-libur{
    	background-color: black; color: white;padding: 10px;
    }
</style>
<body>



	<div class="main">
		
		<div class="header">
			<h1>REKAP PEMBAYARAN IURAN SANTRI</h1>
			<h6>TPQ MASJID NURUL ISHLAH</h6>
			<h6>Kel. Paccinongan, Kec. Somba Opu, Kab. Gowa</h6>
			<h2>Tahun <?php echo $_GET['thn']; ?></h2>
		</div>

		<div class="detail-hadir">
			<table>
				<thead>
					<tr>
						<th><p>No.</p></th>
						<th><p>Nama Santri</p></th>
						<th><p>01</p></th>
						<th><p>02</p></th>
						<th><p>03</p></th>
						<th><p>04</p></th>
						<th><p>05</p></th>
						<th><p>06</p></th>
						<th><p>07</p></th>
						<th><p>08</p></th>
						<th><p>09</p></th>
						<th><p>10</p></th>
						<th><p>11</p></th>
						<th><p>12</p></th>
						<th><p>Total</p></th>
					</tr>
				</thead>
				<tbody>

				<?php

					include '../config/connect-db.php';

					$thn  = $_GET['thn'];

					$qry    = "CALL `xproc_get_iuran_santri_tahunan`('$thn', '', '1')";
					$dat    = mysqli_query($mysqli, $qry);
					$no     = 1;
					$tot    = 0;
					$totall = 0;

                    while($d = mysqli_fetch_array($dat)){

                    $tot = $d['b01']+$d['b02']+$d['b03']+$d['b04']+$d['b05']+$d['b06']+$d['b07']+$d['b08']+$d['b09']+$d['b10']+$d['b11']+$d['b12'];
				?>

					<tr>
						<td><p><?php echo $no; ?></p></td>
						<td style="text-align: left;padding-left: 10px;"><p><?php echo $d['nama']; ?> <br> <b>NIST:</b> <?php echo $d['nist']; ?> </p></td>
						<td class="<?php echo getClass($d['b01']); ?>"><p><?php echo getValue($d['b01']); ?></p></td>
						<td class="<?php echo getClass($d['b02']); ?>"><p><?php echo getValue($d['b02']); ?></p></td>
						<td class="<?php echo getClass($d['b03']); ?>"><p><?php echo getValue($d['b03']); ?></p></td>
						<td class="<?php echo getClass($d['b04']); ?>"><p><?php echo getValue($d['b04']); ?></p></td>
						<td class="<?php echo getClass($d['b05']); ?>"><p><?php echo getValue($d['b05']); ?></p></td>
						<td class="<?php echo getClass($d['b06']); ?>"><p><?php echo getValue($d['b06']); ?></p></td>
						<td class="<?php echo getClass($d['b07']); ?>"><p><?php echo getValue($d['b07']); ?></p></td>
						<td class="<?php echo getClass($d['b08']); ?>"><p><?php echo getValue($d['b08']); ?></p></td>
						<td class="<?php echo getClass($d['b09']); ?>"><p><?php echo getValue($d['b09']); ?></p></td>
						<td class="<?php echo getClass($d['b10']); ?>"><p><?php echo getValue($d['b10']); ?></p></td>
						<td class="<?php echo getClass($d['b11']); ?>"><p><?php echo getValue($d['b11']); ?></p></td>
						<td class="<?php echo getClass($d['b12']); ?>"><p><?php echo getValue($d['b12']); ?></p></td>
						<td class="bg-hadir" style="text-align:left;padding-left: 7px;"><p><?php echo getValue($tot); ?></p></td>
					</tr>
					
				 <?php $no++; $totall = $totall + $tot; } ?>

				 	<tr>
				 		<td colspan="14" class="bg-hadir"><h4>TOTAL</h4></td>
				 		<td class="bg-hadir" style="text-align:left;padding-left: 7px;"><?php echo getValue($totall); ?></td>	
				 	</tr>

				</tbody>
			</table>

			<i style="font-size:11px;">Dicetak Pada Tanggal <?php echo datetimeFormat::TanggalIndo(date('Y-m-d'));?> Jam <?php echo date('H:i:s') ?> Di Aplikasi <b>DIGITAL TPQ</b> By Haramain Teknologi</i>
		
		</div>
	</div>

</body>
</html>


<?php

function getValue($val)
{
	if(number_format($val) == 0){
		$res = '-';
	}else{
		$res = 'Rp. '.number_format($val);
	}

	return $res;
}

function getClass($val)
{

	if($val == ""){
	  $class = "bg-tak";	
	}else{
	  $class = "bg-hadir";
	}

	return $class;

}

?>