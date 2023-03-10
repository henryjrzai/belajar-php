<?php
  echo "Sistem Informasi";
  echo "<h1>Fikom Unika</h1>";
  echo "<marquee>Universitas Katolik Santo Thomas</marquee>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengenalan PHP</title>
</head>
<body>
  <?php
    // menampilkan tanggal menggunakan php
    echo gmdate("y-m-d");

    // membuat variabel
    $angka1 = 10;
    $angka2 = 30;
    $angka3 = $angka1 + $angka2;
    echo "$angka3";
  ?>
</body>
</html>