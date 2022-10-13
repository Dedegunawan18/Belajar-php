<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-eqiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berlatih_PHP</title>
</head>
<body>
   <h2>Array</h2>
   <?php
       echo "<h3>Contoh 1</h3>";
       $trainer = ["Dede Gunawan", "Arya", "Farrel", "Abduh", "Abdul"];
       print_r($trainer);

       echo "<h3>Contoh 2</h3>";
       echo "Total Trainer ". count($trainer);
       echo "<ol>";
       echo "<li>" . $trainer[0] ."<ll>";
       echo "<li>" . $trainer[1] ."<ll>";
       echo "<li>" . $trainer[2] ."<ll>";
       echo "<li>" . $trainer[3] ."<ll>";
       echo "<li>" . $trainer[4] ."<ll>";
       echo "</ol>";
    
       echo "<h3>Contoh 3</h3>";
       $biodata = [
            ["nama" => "Dede Gunawan", "umur" => 19, "materi" => "Laravel"],
            ["nama" => "sandi", "umur" => 20, "materi" => "phyton"],
            ["nama" => "fiqry", "umur" => 18, "materi" => "Digital Marketing"],
       ];

       echo "<pre>";
       print_r($biodata);
       echo "<?pre>";
   ?>
</body>
</html>