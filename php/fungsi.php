<?php
	function pisahRibuan1000($angka) {
		$angka = $angka * 1000;
		return number_format($angka, 0, ",", ".");
	}

	function rpPisahRibuan1000($angka) {
		$angka = $angka * 1000;
		return 'Rp. '.number_format($angka, 0, ",", ".");
	}
?>