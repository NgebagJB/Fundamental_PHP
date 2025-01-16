<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("gkryn", 5000000);
        define("bonus", 500000);
        define("ppn", 0.12); 

        function inputkryn($nama, $prodone) {
            $jmlhproyek = 0;
            $totalpendapatan = 0; 
            $gajibersih = 0;

            $totalpendapatan = bonus * $prodone;
            $totalpendapatan = $totalpendapatan + gkryn;
            $totalpendapatan = $totalpendapatan - ($totalpendapatan*ppn);

            echo "Nama karyawan : ". $nama . "<br/>";
            echo "Jumlah proyek yang selesai : ". $prodone . "<br/>";
            echo "Jumlah pendapatan anda keseluruhan adalah : Rp". number_format($totalpendapatan);
            echo "<br/>";
            echo "<br/>";
        }

        inputkryn("Obit", 1);
        inputkryn("Galih", 7);
        inputkryn("Bobby", 10);
        inputkryn("Hajamin", 13);
        inputkryn("Vcresmen", 18);
    ?>
</body>
</html>