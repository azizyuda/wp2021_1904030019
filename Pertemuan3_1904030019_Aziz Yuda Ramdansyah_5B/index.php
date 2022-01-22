<!DOCTYPE html>
<html>
<head>
    <title>pertemuan 3</title>
</head>
<body>
    <!-- PHP dalam HTML -->
    <h1>Selamat datang, <?php echo "Aziz"; ?></h1>

    <!-- tag HTML dalam PHP -->

    <?php echo "<h2>di Pembelajaran Web Programing</h2>";
    ?>
<hr>
    <h2>tipe data integer</h2>

    <?php
    echo "Desimal : "; var_dump(1966); echo "<br>";
    echo "Octa : "; var_dump(01234); echo "<br>";
    echo "Hexadesimal : " ; var_dump(0x1a); echo "<br>";
    echo "Binary : "; var_dump(0b111111); echo "<br>";
    echo "Underschore di nomor : " ; var_dump(1_505_000); echo "<br>";
    ?>

    <hr>
    <h2>variable</h2>
<?php
$namadepan ="Aziz";
$namablk = " Yuda Ramdansyah";
$mk = "Web Programming";
$hobi = "Touring";
?>

<h4>Identitas diri</h4>
<p>nama : <?php echo $namadepan . " ". $namablk; ?></p>
<p>mata kuliah : <?php echo $mk; ?></p>
<p>hobi : <?php echo$hobi; ?></p>


</body>
</html>