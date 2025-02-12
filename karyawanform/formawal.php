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

    <form action="proses.php" method="POST">
        <table border=1 style="border-collapse : collapse; width : 50%; ">
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nama" id="" required></td>
        </tr>
        <tr>
            <td>DIVISI</td>
            <td>:</td>
            <td><input type="text" name="divisi" id="" required></td>
        </tr>
        <tr>
            <td>GAJI DALAM 1 BULAN</td>
            <td>Rp:</td>
            <td><input type="number" name="gaji" id="" required></td>
        </tr>
            <td>APAKAH KAMU MEMILIKI NPWP?</td>
            <td>:</td>
            <td>
                <input type="radio" name="npwp" id="" Value="PunyaNPWP" required>Punya NPWP
                <br>
                <input type="radio" name="npwp" id="" Value="TidakNPWP" required>Tidak Punya NPWP
            </td>
        <tr>
            <td>
                <br>
                <input type="submit" class="btn btn-info" value="SUBMIT">
            </td>
        </tr>
        </table>
    </form>
</body>
</html>