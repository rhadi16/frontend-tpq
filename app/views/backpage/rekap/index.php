<?php

	include "../config/auth.php";
	include '../config/base-url.php';

	$lap_rekap = $_POST['lap_rekap'];
	$santri    = $_POST['santri'];
	$tahun     = $_POST['tahun'];
	$bulan     = $_POST['bulan'];


	if($lap_rekap == '1')
	{

		echo '<script language="javascript"> 
				window.location.href = "'.$base_url_back.'/rekap/rekap-kehadiran-santri.php?thn='.$tahun.'&bln='.$bulan.'" 
			 </script>';

	}elseif($lap_rekap == '2')
	{

		echo '<script language="javascript"> 
				window.location.href = "'.$base_url_back.'/rekap/rekap-kehadiran-pengurus.php?thn='.$tahun.'&bln='.$bulan.'" 
			 </script>';

	}elseif($lap_rekap == '5')
	{

		echo '<script language="javascript"> 
				window.location.href = "'.$base_url_back.'/rekap/rekap-iuran-santri.php?thn='.$tahun.'&bln='.$bulan.'" 
			 </script>';

	}elseif($lap_rekap == '6')
	{

		echo '<script language="javascript"> 
				window.location.href = "'.$base_url_back.'/rekap/laporan-resmi-santri.php?thn='.$tahun.'&bln='.$bulan.'&nist='.$santri.'" 
			 </script>';

	}elseif($lap_rekap == '7')
	{

		echo '<script language="javascript"> 
				window.location.href = "'.$base_url_back.'/rekap/rekap-gaji-pengurus.php?thn='.$tahun.'&bln='.$bulan.'" 
			 </script>';

	}

?>