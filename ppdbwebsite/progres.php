<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        td {
            padding : 1em;
        }

        table {
            width: 50%;
            position: absolute;
            left: 25rem;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['SUBMIT']))
    ?>

    <h1>FORM FINAL</h1>
    <h1>BY</h1>
    <h1>RIZKI AHMAD FAUZI</h1>

    <table border=1 style="border-collapse : collapse; width : 50%; ">
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td> <?= $_POST['nisn'] ?> </td>
            </tr>
            <tr>
                <td>NAMA LENGKAP</td>
                <td>:</td>
                <td> <?= $_POST['nama'] ?> </td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td> <?= $_POST['tl'] ?> </td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td> <?= $_POST['tgl'] ?> </td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>:</td>
                <td>
                    <?= $_POST['gender'] ?> </td>
                </td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>
                    <?= $_POST['agomo'] ?> </td>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td> <?= $_POST['alamat'] ?> </td>
            </tr>
            <tr>
                <td>ASAL SEKOLAH</td>
                <td>:</td>
                <td> <?= $_POST['ASALSEKOLAH'] ?> </td>
            </tr>
            <tr>
                <td>PILIHAN 1</td>
                <td>:</td>
                <td>
                    <?= $_POST['pil1'] ?>
                </td>
            </tr>
            <tr>
                <td>PILIHAN 2</td>
                <td>:</td>
                <td>
                    <?= $_POST['pil2'] ?>
                </td>
            </tr>
            <tr>
                <td>PILIHAN 3</td>
                <td>:</td>
                <td>
                    <?= $_POST['pil3'] ?>
                </td>
            </tr>
            <tr>
                <td>EKSTRAKULIKULER</td>
                <td>:</td>
                <td>
                    <?= implode(", ",$_POST["ekskul"]) ?>
                </td>
            </tr>
        </table>
</body>
</html>