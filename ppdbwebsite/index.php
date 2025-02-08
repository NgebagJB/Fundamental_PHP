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
    <h1>FORM PPDB</h1>
    <h1>BY</h1>
    <h1>RIZKI AHMAD FAUZI</h1>
    <form action="progres.php" method="POST">
        <table border=1 style="border-collapse : collapse; width : 50%; ">
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><input type="text" name="nisn" id=""></td>
            </tr>
            <tr>
                <td>NAMA LENGKAP</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td><input type="text" name="tl" id=""></td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td><input type="date" name="tgl" id=""></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>:</td>
                <td>
                    <input type="radio" name="gender" id="" Value="Laki - Laki">Laki - Laki
                    <input type="radio" name="gender" id="" Value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>
                    <select name="agomo" id="">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><textarea name="alamat" id=""></textarea></td>
            </tr>
            <tr>
                <td>ASAL SEKOLAH</td>
                <td>:</td>
                <td><input type="text" name="ASALSEKOLAH" id=""></td>
            </tr>
            <tr>
                <td>PILIHAN 1</td>
                <td>:</td>
                <td>
                    <select name="pil1" id="">
                        <option value="">Pilih Jurusan</option>
                        <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                        <option value="MPLB">Manajemen Perkantoran dan Layanan Bisnis</option>
                        <option value="PM">Pemasaran</option>
                        <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                        <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
                        <option value="DKV">Desain Komunikasi Visual</option>
                        <option value="SP">Seni Pertunjukan</option>
                        <option value="BCF">BroadCasting dan perFilman </option>
                        <option value="PH">Perhotelan</option>
                        <option value="KL">Kuliner</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>PILIHAN 2</td>
                <td>:</td>
                <td>
                    <select name="pil2" id="">
                        <option value="">Pilih Jurusan</option>
                        <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                        <option value="MPLB">Manajemen Perkantoran dan Layanan Bisnis </option>
                        <option value="PM">Pemasaran</option>
                        <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                        <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
                        <option value="DKV">Desain Komunikasi Visual</option>
                        <option value="SP">Seni Pertunjukan</option>
                        <option value="BCF">BroadCasting dan perFilman </option>
                        <option value="PH">Perhotelan</option>
                        <option value="KL">Kuliner</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>PILIHAN 3</td>
                <td>:</td>
                <td>
                    <select name="pil3" id="">
                        <option value="">Pilih Jurusan</option>
                        <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                        <option value="MPLB">Manajemen Perkantoran dan Layanan Bisnis </option>
                        <option value="PM">Pemasaran</option>
                        <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                        <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
                        <option value="DKV">Desain Komunikasi Visual</option>
                        <option value="SP">Seni Pertunjukan</option>
                        <option value="BCF">BroadCasting dan perFilman </option>
                        <option value="PH">Perhotelan</option>
                        <option value="KL">Kuliner</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>EKSTRAKULIKULER</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="ekskul[]" id="" Value="OSIS">OSIS
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="PRAMUKA">PRAMUKA
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="REMAS">REMAS
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="PMR">PMR
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="FUTSAL">FUTSAL
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="BASKET">BASKET
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="VOLI">VOLI
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="TEATER">TEATER
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="LASKAR HIJAU">LASKAR HIJAU
                    <br>
                    <input type="checkbox" name="ekskul[]" id="" Value="GDS">GDS
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-info" value="SUBMIT">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>