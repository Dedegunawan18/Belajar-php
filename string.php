<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-eqiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berlatih_PHP</title>
</head>
<body>
     <h2>Contoh Soal</h2>
    <?php

       echo "<h3>Contoh 1</h3>";
       $kalimat1 = "Hello world";
       echo "Kalimat pertama : ". $kalimat1 . "<br>";
       echo "Panjang string : " . strlen($kalimat1) ."<br>";
       echo "Jumlah Kata : " . str_word_count($kalimat1) . "<br><br>";

       echo "<h3>Contoh 2</h3>";
       $string2 = "nama saya dede gunawan";
       echo "Kalimat kedua : ". $string2."<br>";
       echo "Kata Pertama : " . substr($string2,0,4) ."<br>";
       echo "Kata Kedua : " . substr($string2,5,4) ."<br>";
       echo "Kata Ketiga : " . substr($string2,10,4) ."<br>";
       echo "Kata Keempat : " . substr($string2,15,7) ."<br>";

       echo "<h3>Contoh 3</h3>";
       $string3 = "Selamat Pagi";
       echo "kalimat ketiga : ". $string3."<br>"; 
       echo "Ganti Kalimat ketiga : ". str_replace("Pagi","Malam",$string3);

    ?>

</body>
</html>