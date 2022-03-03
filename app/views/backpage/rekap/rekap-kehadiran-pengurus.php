<?php

	include '../plugin/datetime_format/datetimeFormat.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>REKAP KEHADIRAN PENGURUS</title>
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
			<h1>LAPORAN KEHADIRAN PENGURUS</h1>
			<h6>TPQ MASJID NURUL ISHLAH</h6>
			<h6>Kel. Paccinongan, Kec. Somba Opu, Kab. Gowa</h6>
			<h2>Periode <?php echo datetimeFormat::TampilPeriode($_GET['thn'], $_GET['bln']); ?></h2>
		</div>

		<div class="detail-hadir">
			<table>
				<thead>
					<tr>
						<th><p>No.</p></th>
						<th><p>Nama Pengurus</p></th>
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
						<th><p>13</p></th>
						<th><p>14</p></th>
						<th><p>15</p></th>
						<th><p>16</p></th>
						<th><p>17</p></th>
						<th><p>18</p></th>
						<th><p>19</p></th>
						<th><p>20</p></th>
						<th><p>21</p></th>
						<th><p>22</p></th>
						<th><p>23</p></th>
						<th><p>24</p></th>
						<th><p>25</p></th>
						<th><p>26</p></th>
						<th><p>27</p></th>
						<th><p>28</p></th>
						<th><p>29</p></th>
						<th><p>30</p></th>
						<th><p>31</p></th>
					</tr>
				</thead>
				<tbody>

				<?php

					include '../config/connect-db.php';

					$thn  = $_GET['thn'];
					$bln  = $_GET['bln'];

					$qry  = "CALL `xproc_get_absen_pengurus_bulanan`('$thn', '$bln', '', '1')";
					$dat  = mysqli_query($mysqli, $qry);
					$no   = 1;

                    while($d = mysqli_fetch_array($dat)){

				?>

					<tr>
						<td><p><?php echo $no; ?></p></td>
						<td style="text-align: left;padding-left: 10px;"><p><?php echo $d['nama']; ?> <br> <b>NIPG:</b> <?php echo $d['nipg']; ?> </p></td>
						<td class="<?php echo getClass($d['t01']); ?>"><p><?php echo getValue($d['t01']); ?></p></td>
						<td class="<?php echo getClass($d['t02']); ?>"><p><?php echo getValue($d['t02']); ?></p></td>
						<td class="<?php echo getClass($d['t03']); ?>"><p><?php echo getValue($d['t03']); ?></p></td>
						<td class="<?php echo getClass($d['t04']); ?>"><p><?php echo getValue($d['t04']); ?></p></td>
						<td class="<?php echo getClass($d['t05']); ?>"><p><?php echo getValue($d['t05']); ?></p></td>
						<td class="<?php echo getClass($d['t06']); ?>"><p><?php echo getValue($d['t06']); ?></p></td>
						<td class="<?php echo getClass($d['t07']); ?>"><p><?php echo getValue($d['t07']); ?></p></td>
						<td class="<?php echo getClass($d['t08']); ?>"><p><?php echo getValue($d['t08']); ?></p></td>
						<td class="<?php echo getClass($d['t09']); ?>"><p><?php echo getValue($d['t09']); ?></p></td>
						<td class="<?php echo getClass($d['t10']); ?>"><p><?php echo getValue($d['t10']); ?></p></td>
						<td class="<?php echo getClass($d['t11']); ?>"><p><?php echo getValue($d['t11']); ?></p></td>
						<td class="<?php echo getClass($d['t12']); ?>"><p><?php echo getValue($d['t12']); ?></p></td>
						<td class="<?php echo getClass($d['t13']); ?>"><p><?php echo getValue($d['t13']); ?></p></td>
						<td class="<?php echo getClass($d['t14']); ?>"><p><?php echo getValue($d['t14']); ?></p></td>
						<td class="<?php echo getClass($d['t15']); ?>"><p><?php echo getValue($d['t15']); ?></p></td>
						<td class="<?php echo getClass($d['t16']); ?>"><p><?php echo getValue($d['t16']); ?></p></td>
						<td class="<?php echo getClass($d['t17']); ?>"><p><?php echo getValue($d['t17']); ?></p></td>
						<td class="<?php echo getClass($d['t18']); ?>"><p><?php echo getValue($d['t18']); ?></p></td>
						<td class="<?php echo getClass($d['t19']); ?>"><p><?php echo getValue($d['t19']); ?></p></td>
						<td class="<?php echo getClass($d['t20']); ?>"><p><?php echo getValue($d['t20']); ?></p></td>
						<td class="<?php echo getClass($d['t21']); ?>"><p><?php echo getValue($d['t21']); ?></p></td>
						<td class="<?php echo getClass($d['t22']); ?>"><p><?php echo getValue($d['t22']); ?></p></td>
						<td class="<?php echo getClass($d['t23']); ?>"><p><?php echo getValue($d['t23']); ?></p></td>
						<td class="<?php echo getClass($d['t24']); ?>"><p><?php echo getValue($d['t24']); ?></p></td>
						<td class="<?php echo getClass($d['t25']); ?>"><p><?php echo getValue($d['t25']); ?></p></td>
						<td class="<?php echo getClass($d['t26']); ?>"><p><?php echo getValue($d['t26']); ?></p></td>
						<td class="<?php echo getClass($d['t27']); ?>"><p><?php echo getValue($d['t27']); ?></p></td>
						<td class="<?php echo getClass($d['t28']); ?>"><p><?php echo getValue($d['t28']); ?></p></td>
						<td class="<?php echo getClass($d['t29']); ?>"><p><?php echo getValue($d['t29']); ?></p></td>
						<td class="<?php echo getClass($d['t30']); ?>"><p><?php echo getValue($d['t30']); ?></p></td>
						<td class="<?php echo getClass($d['t31']); ?>"><p><?php echo getValue($d['t31']); ?></p></td>
					</tr>
					
				 <?php $no++; } ?>

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
    
    if($val == ""){
	  $value = "-";	
	}else{
	  $value = $val;
	}

	return $value;

}

function getClass($val)
{

	if($val == "LIBUR"){
	  $class = "bg-libur";	
	}elseif($val == "IJIN"){
	  $class = "bg-ijin";	
	}elseif($val == "SAKIT"){
	  $class = "bg-sakit";	
	}elseif($val == ""){
	  $class = "bg-tak";	
	}else{
	  $class = "bg-hadir";
	}

	return $class;

}

?>