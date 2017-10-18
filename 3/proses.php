<?php
    Include "data.php";

    //Input data kedalam database
    $sql = "INSERT INTO `peserta` (`nomor_polis`, `nama`, `tanggal_lahir`, `kanker`, `jantung`, `diabet`, `hutang`, `pekerjaan`, `nama_pekerjaan`,  `gaji`, `hobi`, `nama_hobi`, `olahraga`, `nama_olahraga`, `menikah`, `rumah`, `jumlah_anak`) VALUES (NULL, '$nama', '$tanggal_lahir', '$jantung', '$diabet', '$kanker', '$hutang', '$pekerjaan', '$nama_pekerjaan', '$gaji', '$hobi', '$nama_hobi', '$olahraga', '$nama_olahraga', '$menikah', '$rumah', '$jumlah_anak')";
    mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Result | Budi Insurance</title>

        <!--- CSS Sendiri -->
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="container"><br/>
            <?php
                if ($premi != 0 && $asuransi != 0) {
                    echo "
                        <div class='alert alert-success'>
                            <h2 class='alert-heading'><b>Selamat</b>, kepada saudara(i) ".$nama."</h2>
                            <p>
                                Anda bisa mengikuti program asuransi di Budi Insurance dengan Premi setiap bulannya ".$rp_premi.",-.<br/>
                                Dengan jaminan asuransi meninggal dunia sebesar ".$rp_asuransi.",-.
                            </p>
                            <hr>
                            <p class='mb-0'>
                                Masukan data lain <a href='index.html' class='alert-link'>disini</a>, atau menampilkan daftar peserta <a href='tampil.php' class='alert-link'>disini</a>.
                            </p>
                        </div>
                    ";
                } else {
                    echo "
                        <div class='alert alert-danger'>
                            <h2 class='alert-heading'><b>Mohon maaf</b>, kepada saudara(i) ".$nama."</h2>
                            <p>
                                Hal ini terjadi karena sisa gaji anda setelah di kurangi tanggungan masih belum mencukupi standar Budi Insurance,<br/>
                                Ataupun kondisi kesehatan anda tidak mencukup standar untuk mengikuti asuransi.
                            </p>
                            <hr>
                            <p class='mb-0'>
                                Masukan data lain <a href='index.html' class='alert-link'>disini</a>, atau menampilkan daftar peserta <a href='tampil.php' class='alert-link'>disini</a>.   
                            </p>
                        </div>
                    ";
                }; ?>

            <div class="row">
                <div class="col-12 text-right">
                    <a href="tentang.html" class="tentang">About</a>
                    <br/><br/>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>