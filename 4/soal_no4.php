<?php
    Include "konek.php";
    Include "regression.phpregression.php";

    $sql = "SELECT * FROM keuntungan";
    $tmp = mysqli_query ($con, $sql);

    $regression = new PolynomialRegression( 2 );
    
    while ($x = mysqli_fetch_array($tmp)) {
        $tahun = $x['tahun'];
        $laba = $x['laba'];
        $regression->addData( $tahun, $laba );
    }

    $coefficients = $regression->getCoefficients();

    $laba = $regression->interpolate( $coefficients, 2017 );

    echo $laba;
?>