<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            position: absolute;
            left: 25rem;
            top : 10rem
        }
        td {
            padding : 1em;
        }
    </style>

    <?php
        if (isset($_POST['SUBMIT']))

        $nama = $_POST['nama'];
        $divisi = $_POST['divisi'];
        $gaji = $_POST['gaji'];
        $npwp = $_POST['npwp'];

        $totalgajisebulan = $gaji;
        $totalgajisetahun = $gaji * 12;
        $totalgajisudahdipotong = 0;
        $pajak = 0;

        if ($npwp == "PunyaNPWP") {
            $totalgajisudahdipotong = $totalgajisetahun - ($totalgajisetahun * 0.15);
            $pajak = 15;
        } else {
            $totalgajisudahdipotong = $totalgajisetahun - ($totalgajisetahun * 0.20);
            $pajak = 20;
        }

    ?>

    <table border=1 style="border-collapse: collapse; width: 50%;">
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td> <?= $_POST['nama'] ?> </td>
        </tr>
        <tr>
            <td>DIVISI</td>
            <td>:</td>
            <td> <?= $_POST['divisi'] ?> </td>
        </tr>
        <tr>
            <td>GAJI KOTOR</td>
            <td>:</td>
            <td> <?= "Rp" . number_format($totalgajisebulan) ?> </td>
        </tr>
        <tr>
            <td>POTONGAN PAJAK</td>
            <td>:</td>
            <td><?= $pajak ?>%</td>
        </tr>
        <tr>
            <td>GAJI BULANAN YANG DITERIMA</td>
            <td>:</td>
            <td>
                <?php
                    if ($totalgajisebulan > 54000000) {
                        echo "Rp" . number_format($totalgajisudahdipotong / 12);
                    } else {
                        echo "Jika Anda membayar pajak maka: Rp" . number_format($totalgajisudahdipotong / 12) . "</br>";
                        echo "Jika tidak maka: Rp" . number_format($totalgajisebulan);
                    }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>