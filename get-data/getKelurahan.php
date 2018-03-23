<?php

/**
 * ========================================
 * Developed By @LamhotSimamora
 * ========================================
 */

if (isset($_POST['kode']))
{
	$kode = trim($_POST['kode']);
	include '../system/wilayahIndonesia.php';

	$wilayahIndonesia = new wilayahIndonesia();
	$wilayahIndonesia->setKode($kode);
	$getKelurahan = $wilayahIndonesia->getDataKelurahan();
	$getJumlahKelurahan = $wilayahIndonesia->getJumlahKelurahan();

	$tmplate = '';
	echo json_encode($getKelurahan);
	for ($i=0; $i < $getJumlahKelurahan ; $i++) 
	{ 
		$detail_kelurahan = $getKelurahan[$i];
		$tmplate .= '<option value="'.$detail_kelurahan['kode'].'">'.$detail_kelurahan['nama'].'</option>';
	}
	echo $tmplate;
}else{
	echo "404";
}