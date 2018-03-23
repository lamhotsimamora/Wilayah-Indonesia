<?php 

/**
 * ========================================
 * Developed By @LamhotSimamora
 * ========================================
 */

include 'db.php';

/**
* Wilayah Class
*/
class wilayahIndonesia extends driverPDO
{
	private $kode;

	public function setKode($kode)
	{
		$this->kode = ($kode);
	}

	//====================================================================
	
	private function setQueryKotaKabupaten()
	{
		$this->setQuery('SELECT kode,nama  FROM wilayah WHERE lEFT(kode,2) = "'.$this->kode.'" and CHAR_LENGTH(kode)=5 ORDER BY nama');
	}

	private function setQueryKecamatan()
	{
		$this->setQuery('SELECT kode,nama  FROM wilayah WHERE lEFT(kode,5) = "'.$this->kode.'" and CHAR_LENGTH(kode)=8 ORDER BY nama');
	}

	private function setQueryKelurahan()
	{
		$this->setQuery('SELECT kode,nama  FROM wilayah WHERE lEFT(kode,8) = "'.$this->kode.'" and CHAR_LENGTH(kode)=13 ORDER BY nama');
	}

	private function setQueryProvinsi()
	{
		$this->setQuery('SELECT kode,nama FROM wilayah WHERE CHAR_LENGTH(kode)=2 ORDER BY nama');
	}

	//====================================================================

	public function getDataKotaKabupaten()
	{
		$this->setQueryKotaKabupaten();
		return $this->getAllData();
	}
	
	public function getDataProvinsi()
	{
		$this->setQueryProvinsi();
		return $this->getAllData();
	}

	public function getDataKecamatan()
	{
		$this->setQueryKecamatan();
		return $this->getAllData();
	}

	public function getDataKelurahan()
	{
		$this->setQueryKelurahan();
		return $this->getAllData();
	}

	//====================================================================
	
	public function getJumlahProvinsi()
	{
		$this->setQueryProvinsi();
		$this->execute();
		return $this->getCount();
	}

	public function getJumlahKotaKabupaten()
	{
		$this->setQueryKotaKabupaten();
		$this->execute();
		return $this->getCount();
	}

	public function getJumlahKecamatan()
	{
		$this->setQueryKecamatan();
		$this->execute();
		return $this->getCount();
	}

	public function getJumlahKelurahan()
	{
		$this->setQueryKelurahan();
		$this->execute();
		return $this->getCount();
	}
}
