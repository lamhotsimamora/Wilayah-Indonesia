const url_dir = 'http://localhost/wilayah-indonesia/get-data/';

const url_get_data = {
	kabupaten: url_dir+'getKotaKabupaten.php',
	kecamatan: url_dir+'getKecamatan.php',
	kelurahan: url_dir+'getKelurahan.php'
};

$provinsi_select.when('change',$=>{

	$getKode = $provinsi_select.getSelected();

	$obj    = JSON.parse($getKode);
	$kode   = $obj.value;
	
	$getKotaKabupaten = __({
	  url   : url_get_data.kabupaten,
	  method: 'post',
	  data  : {
	  	kode:$kode
	  }
	});

	$getKotaKabupaten.request($response=>{
		$kabupaten_select.setContent($response);
		$div_kabupaten_select.show();

		$div_kecamatan_select.hide();
		$div_kelurahan_select.hide();
	});
});

$kabupaten_select.when('change',$=>{
	$getKode = $kabupaten_select.getSelected();

	$obj    = JSON.parse($getKode);
	$kode   = $obj.value;
	
	$getKecamatan = __({
	  url   : url_get_data.kecamatan,
	  method: 'post',
	  data  : {
	  	kode:$kode
	  }
	});

	$getKecamatan.request($response=>{
		$kecamatan_select.setContent($response);
		$div_kecamatan_select.show();

		$div_kelurahan_select.hide();
	});
});

$kecamatan_select.when('change',$=>{
	$getKode = $kecamatan_select.getSelected();

	$obj    = JSON.parse($getKode);
	$kode   = $obj.value;

	$getKelurahan = __({
	  url   : url_get_data.kelurahan,
	  method: 'post',
	  data  : {
	  	kode:$kode
	  }
	});

	$getKelurahan.request($response=>{
		$kelurahan_select.setContent($response);
		$div_kelurahan_select.show();
	});
});