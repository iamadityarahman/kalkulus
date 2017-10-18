<?php
    $title = "Pendaftaran Asuransi";
    Include "../content/head.php";
?>
<body>
    <? Include "../content/atas.php" ?>
    
    <div class="w3-container">
    	<h1>Form Pendaftaran Asuransi Budi</h1>
    		<form method="POST" action="proses.php">
    	
    </div>
				
				
				
Nama Lengkap
<input type="text" class="form-control" name="nama" placeholder="Masukan nama lengkap disini" required/>

Tangaal Lahir
<input name="tanggal_lahir" type="date" class="form-control" placholder="MM/DD/YYYY" required/>

Riwayat Penyakit Kanker
<input class="form-check-input" type="radio" name="kanker" value="0" required> Tidak pernah sakit kanker
<input class="form-check-input" type="radio" name="kanker" value="20" required> Pernah/Sedang sakit kanker

Riwayat Penyakit Jantung
<input class="form-check-input" type="radio" name="jantung" value="0" required> Tidak pernah sakit jantung
<input class="form-check-input" type="radio" name="jantung" value="20" required> Pernah/sedang sakit jantung

Riwayat Penyakit Diabetes
<input class="form-check-input" type="radio" name="diabet" value="0" required> Tidak pernah sakit diabetes
<input class="form-check-input" type="radio" name="diabet" value="15" required> Pernah/sedang sakit diabetes

Kategori Hobi
<input class="form-check-input" type="radio" name="hobi" value="0" required> Tidak memiliki hobi
<input class="form-check-input" type="radio" name="hobi" value="6" required> Memliki hobi ringan
<input class="form-check-input" type="radio" name="hobi" value="15" required> Memiliki hobi berat

Nama Hobi
<input type="text" class="form-control" name="nama_hobi" placeholder="Masukan hobi disini" required>

Intensitas Olaharaga
<input class="form-check-input" type="radio" name="olahraga" value="0" required> Tidak pernah olahraga
<input class="form-check-input" type="radio" name="olahraga" value="6" required> Melakukan olahraga ringan
<input class="form-check-input" type="radio" name="olahraga" value="15" required> Selalu melakukan olahraga berat

Nama Olahraga Kesukaan
<input type="text" class="form-control" name="nama_olahraga" placeholder="Masukan olahraga favorit disini" required>

Status dan Kategori Pekerjaan
<input class="form-check-input" type="radio" name="pekerjaan" value="0" required> Tidak bekerja/nganggur
<input class="form-check-input" type="radio" name="pekerjaan" value="6" required> Berkerja dengan instensitas ringan
<input class="form-check-input" type="radio" name="pekerjaan" value="15" required> Selalu bekerja dengan berat

Nama Pekerjaan
<input type="text" class="form-control" name="nama_pekerjaan" placeholder="Masukan nama pekerjaan anda disini" required>

Status Kepemilikan Rumah
<input class="form-check-input" type="radio" name="rumah" value="0" required> Tidak memiliki rumah
<input class="form-check-input" type="radio" name="rumah" value="5" required> Memiliki rumah pribadi

Status Menikah
<input class="form-check-input" type="radio" name="menikah" value="0" required> Belum
<input class="form-check-input" type="radio" name="menikah" value="6" required> Sudah menikah

Jumlah Anak
<input type="text" class="form-control" name="jumlah_anak" placeholder="Masukan jumlah anak tanggungan" required>
<input type="text" class="form-control" name="gaji" placeholder="Masukan gajih dalam rupiah disini" required>
<input type="text" class="form-control" name="hutang" placeholder="Masukan hutang yang dimiliki dalam rupiah disini" required>

<button type="submit" class="btn btn-primary">Kirimkan data</button>
<button type="reset" class="btn btn-primary">Reset data</button>

						Catatan:<br/>
						<ul>
							<li>Semua data wajib diisi/dipilih</li>
							<li>Jika tidak memiliki hobi, olahraga dan pekerjaan isikan dengan "-"</li>
							<li>Jika tidak memiliki gaji, hutang dan anak isikan dengan "0"</li>
						</ul>

    <? include "../content/bawah.php" ?>
</body>
        