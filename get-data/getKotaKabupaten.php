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
	$getKotaKabupaten = $wilayahIndonesia->getDataKotaKabupaten();
	$getJumlahKotaKabupaten = $wilayahIndonesia->getJumlahKotaKabupaten();

	$tmplate = '';

	for ($i=0; $i < $getJumlahKotaKabupaten ; $i++) 
	{ 
		$detail_kotakab = $getKotaKabupaten[$i];
		$tmplate .= '<option value="'.$detail_kotakab['kode'].'">'.$detail_kotakab['nama'].'</option>';
	}
	echo $tmplate;
}else{
	echo "404";
}