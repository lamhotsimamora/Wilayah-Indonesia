<?php 

/**
 * ========================================
 * Developed By @LamhotSimamora
 * Original Creator Database @cahyadsn
 * ========================================
 */

include 'system/wilayahIndonesia.php';
$wilayahIndonesia = new wilayahIndonesia();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wilayah Indonesia Provinsi Kabupaten Kota Kecamatan </title>
	<meta name="og:image" 			content="" />
	<meta property="og:image"     	content="" />
	<link rel="shortcut icon" type="image/png" href="icon.png"/>
	<meta name="ROBOTS" 			content="index"/>
	<meta name="Author" 			content="Remake by @lamhotsimamora" />
	<meta name="copyright" 			content="Copyright@2018 | All Right Reserved" />
	<meta property="og:title" 		content="Wilayah Indonesia Provinsi Kabupaten Kota Kecamatan" />
	<meta property="og:description" content="Wilayah Indonesia Provinsi Kabupaten Kota Kecamatan" />
	<meta property="og:name"      	content="Wilayah Indonesia Provinsi Kabupaten Kota Kecamatan" />
	<meta name="language" 		  	content="Indonesian, English" />
	<meta name="distribution" 	  	content="Global" />
	<meta name="rating" 		  	content="General" />
	<meta name="expires" 		  	content="1800" />
	<meta name="theme-color"      	content="#78D122"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://www.cdn.lamhotsimamora.com/garuda2/"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container">
		 <br> <br>
			<div class="alert alert-primary" role="alert">
				Special Thanks To Creator Database Of Wilayah : <a href="https://github.com/cahyadsn/wilayah" target="_blank"> <i class="fa fa-github" aria-hidden="true"></i> Github</a><br>
				<a href="https://github.com/cahyadsn" target="_blank"><img src="https://avatars3.githubusercontent.com/u/3700401?s=460&v=4" class="img-thumbnail" width="120" height="120">&nbsp CahyDSN</a>
			</div>
			<div class="alert alert-secondary" role="alert">
			    Remake by : <a href="https://github.com/lamhotsimamora/Wilayah-Indonesia" target="_blank"> <i class="fa fa-github" aria-hidden="true"></i> Github</a><br>
			    <a href="https://github.com/lamhotsimamora" target="_blank"><img src="https://avatars2.githubusercontent.com/u/14279170?s=460&v=4" class="img-thumbnail" width="100" height="100">&nbsp Lamhot Simamora</a>
			</div>
		 <hr>

	</div>
	
	<div class="container">
		
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <button class="btn btn-outline-secondary" type="button">Provinsi</button>
		  </div>
		  <select class="custom-select" id="provinsi_select">
		    	<?php 

		    	$total_provinsi = $wilayahIndonesia->getJumlahProvinsi();
		    	$data_provinsi  = $wilayahIndonesia->getDataProvinsi();
		    	
		    	$tmplate = '';
		    	for ($i=0; $i < $total_provinsi ; $i++) 
		    	{ 
		    		$detail_provinsi = $data_provinsi[$i];
		    		$tmplate .= '<option value="'.$detail_provinsi['kode'].'">'.$detail_provinsi['nama'].'</option>';
		    	}
		    	echo $tmplate;
		    	?>
		  </select>
		</div>
		
		<!-- Kabupaten -->
		<div id="div_kabupaten_select" class="input-group mb-3" style="display: none" >
		  <div class="input-group-prepend">
		    <button class="btn btn-outline-primary" type="button">Kota/Kabupaten</button>
		  </div>
		  <select class="custom-select" id="kabupaten_select">
		    	
		  </select>
		</div>
		<!-- Kabupaten -->
		
		<!-- Kecamatan -->
		<div id="div_kecamatan_select" class="input-group mb-3" style="display: none" >
		  <div class="input-group-prepend">
		    <button class="btn btn-outline-success" type="button">Kecamatan</button>
		  </div>
		  <select class="custom-select" id="kecamatan_select">
		    	
		  </select>
		</div>
		<!-- Kecamatan -->
		
		<!-- Kelurahan -->
		<div id="div_kelurahan_select" class="input-group mb-3" style="display: none" >
		  <div class="input-group-prepend">
		    <button class="btn btn-outline-danger" type="button">Kelurahan</button>
		  </div>
		  <select class="custom-select" id="kelurahan_select">
		    	
		  </select>
		</div>
		<!-- Kelurahan -->
	</div>
	
	<div class="container">
		<br><br><hr>
			<div class="jumbotron">
					<footer>
						 <center>This Library (PHP OOP) Was Made in March 2018 | License MIT </center><br>
						 <hr>

						  <center> - INDONESIA - </center>
					</footer>
			</div>
	</div>


</body>
<script type="text/javascript" src="js/component.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</html>