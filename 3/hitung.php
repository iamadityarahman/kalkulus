<?php
    //Mengambil tahun lahir dari inputan
    list($tahun, $bulan, $tanggal) = explode ( '-', $tanggal_lahir);
    
    //mengambil tahun saat ini
    $tgl_now = getdate();
    $tahun_now = $tgl_now['year'];

    //menghitung umur
    $umur = $tahun_now - $tahun;

    //prediksi awal
    $umur_awal = 70 - $umur;

    //menghitung presentasi hidup
    $hitung_kanker = $umur_awal * ($kanker/100);
    $hitung_jantung = $umur_awal * ($jantung/100);
    $hitung_diabet = $umur_awal * ($diabet/100);
    $hitung_pekerjaan = $umur_awal * ($pekerjaan/100);
    $hitung_hobi = $umur_awal * ($hobi/100);
    $hitung_olahraga = $umur_awal * ($olahraga/100);

    //menghiung prediksi umur akhir
    $umur_akhir = $umur_awal - ($hitung_kanker + $hitung_diabet + $hitung_jantung + $hitung_pekerjaan + $hitung_hobi + $hitung_olahraga);

    //perhitungan pengeluaran
    $x = $diabet/3;
    $xx = $x*2;

    $keluar_pokok = $gaji * (30/100);
    $keluar_kanker = $gaji * (($kanker/2)/100);
    $keluar_jantung = $gaji * (($jantung/2)/100);
    $keluar_diabet = $gaji * ($xx/100);
    $keluar_hutang = $gaji * (10/100);
    $keluar_hobi = $gaji * (($hobi/3)/100);
    $keluar_olahraga = $gaji * (($olahraga/3)/100);
    $keluar_menikah = $gaji * (($menikah)/100);
    $keluar_rumah = $gaji * ($rumah/100);
    
    if ($jumlah_anak >= 2) {
        $keluar_anak = $gaji * (9/100);
    } else if ($jumlah_anak == 1) {
        $keluar_anak = $gaji * (5/100);
    } else {
        $keluar_anak = 0;
    }

    $sisa = $gaji - ($keluar_pokok + $keluar_kanker + $keluar_jantung + $keluar_diabet + $keluar_hutang + $keluar_hobi + $keluar_olahraga + $keluar_menikah + $keluar_rumah + $keluar_anak);

    //menghitung premi asuransi

    $premi = 0;
    $asuransi = 0;

    if ($pekerjaan == 0) {
        $premi = 0;
        $asuransi = 0;
    } else if ($sisa >= 0 && $sisa < 500000 || $umur_akhir == 0) {
        $premi = 0;
        $asuransi = 0;
    } else if (($sisa >= 500000 && $sisa < 1000000) && ($umur_akhir > 0 && $umur_akhir <= 5)) {
        $premi = 500000;
        $asuransi = 20000000;
    } else if (($sisa >= 500000 && $sisa < 1000000) && ($umur_akhir > 5 && $umur_akhir <= 10)) {
        $premi = 500000;
        $asuransi = 45000000;
    } else if (($sisa >= 500000 && $sisa < 1000000) && ($umur_akhir > 10 && $umur_akhir <= 15)) {
        $premi = 500000;
        $asuransi = 70000000;
    } else if (($sisa >= 500000 && $sisa < 1000000) && ($umur_akhir > 15 && $umur_akhir <= $umur_awal)) {
        $premi = 500000;
        $asuransi = 120000000;
    } else if (($sisa >= 1000000 && $sisa < 2000000) && ($umur_akhir > 0 && $umur_akhir <= 5)) {
        $premi = 1000000;
        $asuransi = 50000000;
    } else if (($sisa >= 1000000 && $sisa < 2000000) && ($umur_akhir > 5 && $umur_akhir <= 10)) {
        $premi = 1000000;
        $asuransi = 110000000;
    } else if (($sisa >= 1000000 && $sisa < 2000000) && ($umur_akhir > 10 && $umur_akhir <= 15)) {
        $premi = 1000000;
        $asuransi = 170000000;
    } else if (($sisa >= 1000000 && $sisa < 2000000) && ($umur_akhir > 15 && $umur_akhir <= $umur_awal)) {
        $premi = 1000000;
        $asuransi = 250000000;
    } else if (($sisa >= 2000000 && $sisa <= $gaji) && ($umur_akhir > 0 && $umur_akhir <= 5)) {
        $premi = 2000000;
        $asuransi = 110000000;
    } else if (($sisa >= 2000000 && $sisa <= $gaji) && ($umur_akhir > 5 && $umur_akhir <= 10)) {
        $premi = 2000000;
        $asuransi = 220000000;
    } else if (($sisa >= 2000000 && $sisa <= $gaji) && ($umur_akhir > 10 && $umur_akhir <= 15)) {
        $premi = 2000000;
        $asuransi = 330000000;
    } else if (($sisa >= 2000000 && $sisa <= $gaji) && ($umur_akhir > 15 && $umur_akhir <= $umur_awal)) {
        $premi = 2000000;
        $asuransi = 440000000;
    }

    //mengubah ke format uang IDR
    $rp_premi = "Rp. ".number_format($premi, 0, ",", ".");
    $rp_asuransi = "Rp. ".number_format($asuransi, 0, ",", ".");
    $rp_gaji = "Rp. ".number_format($gaji, 0, ",", ".");
?>