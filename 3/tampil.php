
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Isi Tabel | Budi Insurance</title>

        <!--- CSS Sendiri -->
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <center>
            <br/><h1>DAFTAR PESERTA</h1><br/>
            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>TANGGAL LAHIR</th>
                        <th>GAJI</th>
                        <th>PREMI</th>
                        <th>BESAR ASURANSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    Include "konek.php";
                    
                    $sql = "SELECT * FROM peserta";
                    $tmp = mysqli_query ($con, $sql);
                    
                    while ($x = mysqli_fetch_array($tmp)) {
                        $no = $x['nomor_polis'];
                        $nama = $x['nama'];
                        $tanggal_lahir = $x['tanggal_lahir'];
                        $kanker = $x['kanker'];
                        $jantung = $x['kanker'];
                        $diabet = $x['diabet'];
                        $hutang = $x['hutang'];
                        $pekerjaan = $x['pekerjaan'];
                        $nama_pekerjaan =$x['nama_pekerjaan'];
                        $gaji = $x['gaji'];
                        $hobi = $x['hobi'];
                        $nama_hobi = $x['nama_hobi'];
                        $olahraga = $x['olahraga'];
                        $nama_olahraga = $x['olahraga'];
                        $menikah = $x['menikah'];
                        $rumah = $x['rumah'];
                        $jumlah_anak = $x['jumlah_anak'];

                        Include "hitung.php";

                        echo "
                                <tr>
                                    <td scope='row'>".$no."</td>
                                    <td>".$nama."</td>
                                    <td>".$tanggal_lahir."</td>
                                    <td>".$rp_gaji.",-</td>
                        ";

                        if ($premi == 0 && $asuransi == 0) {
                            echo "
                                <td colspan='2'><font color='red'>DITOLAK ASURANSI</font></td>
                            </tr>
                            ";       
                        } else {
                                echo "
                                <td>".$rp_premi.",-</td>
                                <td>".$rp_asuransi.",-</td>
                            </tr>
                            ";       
                        }

                    }
                ?>
                </tbody>
            </table>
        </center>
        <div class="row">
                <div class="col-12 text-center">
                    <a href="tentang.html" class="tentang">About</a>
                    <br/><br/>
                </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>