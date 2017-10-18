<?php
	Include "../php/koneksi.php";
	Include "../php/regression.php";
	Include "../php/fungsi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="../css/w3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Prediksi Keuntungan</title>
</head>
<body>
	<!-- Sidebar -->
	<div class="w3-sidebar w3-bar-block w3-animate-left w3-border-right w3-small" style="display:none" id="mySidebar">
		<button onclick="tutup_sidebar()" class="w3-bar-item w3-large">Tutup &times;</button>
		<a href="/3" class="w3-bar-item w3-button">Pendaftaran Asuransi</a>
		<a href="/4" class="w3-bar-item w3-button">Prediksi Keuntungan</a>
		<a href="https://github.com/iamadityarahman/kalkulus_v2.git" class="w3-bar-item w3-button"><i class="fa fa-github" aria-hidden="true"> Github</i></a>
	</div>
	
	<!-- Navbar -->
	<div class="w3-bar w3-black w3-xxlarge">
		<button class="w3-button w3-left" onclick="buka_sidebar()">☰</button>
   		<span class="w3-bar-item">Kalkulus Lanjut</span>
    </div>
    
    <!-- konten -->
    <div class="w3-container">
    	<br/>
    	
    	<h1>History Pemasukan Perusahaan</h1>
    	
    	<div class="w3-responsive">
    		<table class="w3-table-all">
    			<tr>
    				<th>Tahun</th>
    				<th>Jumlah Nasabah</th>
    				<th>Jumlah Premi (Rp)</th>
    				<th>Laba (Rp)</th>
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
								<td>".$tahun."</td>
								<td>".$nasabah."</td>
								<td>".pisahRibuan1000($premi)."</td>
								<td>".pisahRibuan1000($laba)."</td>
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
    
    <script>
		
	function buka_sidebar() {
		document.getElementById("mySidebar").style.display = "block"; }
		
	function tutup_sidebar() {
		document.getElementById("mySidebar").style.display = "none"; }
		
	</script>
</body>
</html>