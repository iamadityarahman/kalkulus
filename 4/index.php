<?php
	$title = "Prediksi Keuntungan";
	Include "../content/head.php";
?>
<body>
	<? Include "../content/atas.php"; ?>
    
    <!-- konten -->
    <div class="w3-container">
    	<h1>Riwayat Pemasukan Perusahaan</h1>
    	<div class="w3-responsive">
    		<table class="w3-table-all">
    			<tr>
    				<th class="w3-center">Tahun</th>
    				<th class="w3-center">Jumlah Nasabah</th>
    				<th class="w3-center">Jumlah Premi (Rp)</th>
    				<th class="w3-center">Laba Per-tahun(Rp)</th>
    			</tr>
    			
    			<?php
					$sql = "SELECT * FROM keuntungan";
					$kill = mysqli_query ($con, $sql);

					$regLaba = new PolynomialRegression;
				
					while ($x = mysqli_fetch_array($kill)) {
						
						$tahun = $x['tahun'];
						$nasabah = $x['jmlh_nasabah'];
						$premi = $x['jmlh_premi'];
						$laba = $x['laba'];

						$regLaba->addData( $tahun, $laba );
						
						echo "<tr>
								<td class='w3-center'>".$tahun."</td>
								<td class='w3-center'>".$nasabah."</td>
								<td class='w3-right-align'>".pisahRibuan1000($premi)."</td>
								<td class='w3-right-align'>".pisahRibuan1000($laba)."</td>
						 	  </tr>";
					}
											
					$coeLaba = $regLaba->getCoefficients();
					$pred_tahun = 2017;
					$prediksi_laba = $regLaba->interpolate( $coeLaba, $pred_tahun );
				?>
			</table>
		</div>
		
		<div class="w3-panel w3-green">
			<h3>Prediksi pada tahun <?=$pred_tahun?> akan mendapatkan keuntungan sebesar <b><?=rpPisahRibuan1000($prediksi_laba)?></b></h3>
		</div>   		
    </div>
    <? Include "../content/bawah.php"?>
</body>
</html>