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
	$getKecamatan = $wilayahIndonesia->getDataKecamatan();
	$getJumlahKecamatan = $wilayahIndonesia->getJumlahKecamatan();

	$tmplate = '';

	for ($i=0; $i < $getJumlahKecamatan ; $i++) 
	{ 
		$detail_kec = $getKecamatan[$i];
		$tmplate .= '<option value="'.$detail_kec['kode'].'">'.$detail_kec['nama'].'</option>';
	}
	echo $tmplate;
}else{
	echo "404";
}