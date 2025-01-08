<!-- ?php 
    /* A. Standar Output
    1. echo
    2. print
    3. print_r
    4. var_dump
    */

    // echo "firman" ;

    
    /* B.  Penulisan sintaks PHP
    1. PHP didalam HTML
    2. HTML didalam PHP
    */

    // C. Variabel Dan tipe data 
    // 1. variabel
// $nama = 'Firman';
// echo "halo nama saya $nama"



// D. Operator
// 1. aritmatika, + - * / %
// $x = 3;
// $y = 4;
// echo $x + $y;

// 2. Penghubung string / concatnation / concat
// . 
// $nama_depan = "Alief";
// $nama_belakang = "Firmansyah";
// echo $nama_depan . " " . $nama_belakang;

// 3. Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Alief";
// $nama .= " ";
// $nama .= "Firman";
// echo $nama;

// E. Perbandingan, Identitas, Logika
// 1. Perbandingan
// <, >, <=, >=, ==
// ===, !==
// &&, ||, !
// var_dump (1 == 1);

// 2. Identitas
// var_dump (1 === "1");

// 3. Logika
// $x = 10;
// var_dump ($x < 20 && $x % 2 == 0);
// var_dump ($x < 30 || $x % 2 == 0);
?> -->

<?php 
// A. PENGULANGAN
// for, while, do.. while, foreach

// 1. For
// for($i = 0; $i < 5; $i++) {
//     echo "Hello World! <br> ";
// }

// 2. While
// $i = 0;
// while ($i < 5) {
//     echo "Hello World <br>";
// $i++;
// }

// 3. Do... While
// $i = 0;
// do {
//     echo "Hello worldd <br>";
// $i++;
// } while ($i < 5);

?>

<?php ?>

<?php
//PENGKONDISIAN / PERCABANGAN
// if else, if else if else, ternary, switch

// 1. if else
// $x = 30;
// if($x > 20) {
//     echo "benar";
// } else {
//     echo "salah";
// }

// 2. if else if else
// if ($x < 20) {
//     echo "benar";
// } else if ($x == 20) {
//     echo "bingo!";
// } else {
//     echo "salah";
// }

// 3. ternary 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris{
            background-color : silver;
        }

    </style>
</head>
<body>

<table border = "1" cellpadding = "10" cellspacing = "0">
    <?php for($i = 1; $i <= 5;$i++) : ?>   
           <?php echo " <tr></tr>" ?>
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j";?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>