<?php

//Autor Nih Latulia R.T - E31190397 - GOL A

//pendeklarasian class
	class kendaraan {
		var $jumlahRoda;//properties
		var $warna;//properties
		var $bahanBakar;//properties
		var $harga;//properties
		var $merek;//properties
		var $tahunPembuatan;//properties

		//function
		function dapatSubsidi() {
			if ($this->bahanBakar = 'Premium' && $this->tahunPembuatan < 2005) $subsidi = 'Dapat';
			else $subsidi = 'Tidak Dapat';
			return $subsidi;
		}
		
	}
?>
