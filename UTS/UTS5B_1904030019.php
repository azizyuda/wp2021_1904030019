<!DOCTYPE html>
<html lang="en">
<head>
    <title>UTS 5B WEB PROGRAMING</title>
    <h2>AZIZ YUDA RAMDANSYAH NIM 1904030019</h2>
    <h3> Array Assosiatif</h3>
    <?php
    $Profile=array("nma"=>"Aziz Yuda Ramdansyah",
                "jrsan"=>"Teknik Informatika",
                "hobi"=>"Badminton",
                "alamat"=>"Laban Bulan RT 02/008 Margasari,Karawaci, Kota Tangerang",
                "nim"=>"1904030019",
                "semester"=>"5 (lima)",
                "umur"=>"22" );

    echo $Profile["nma"];
    echo "<br>";
    echo $Profile["jrsan"];
    echo "<br>";
    echo $Profile["hobi"];
    echo "<br>";
    echo $Profile["alamat"];
    echo "<br>";
    echo $Profile["nim"];
    echo "<br>";
    echo $Profile["semester"];
    echo "<br>";
    echo $Profile["umur"];

    
    echo "<h3>Array Multidimensional</h3>";
    //mengganti isi value
    $data = array(
        array("Aziz Yuda Ramdansyah", "22", "Badminton"),
        array("Ilham Apriyansyah", "23", "Bermain Game"),
        array("Eko Susan Riyanto", "21", "Bermain Game"),
    );

    echo $data[0][0];
    echo "<br>";
    echo $data[1][0];
    echo "<br>";
    echo $data[2][0];
    echo "<br>";
    ;
   
    echo "<h3>Array </h3>";
    //Mengganti Isi Value
    $hobi = ["bermain game","bulu tangkis","
    renang","voli"];
    var_dump($hobi);
    echo"<br>";
    echo "$hobi[3]";
    echo"<br>";
    echo"<br>";

    echo "<h3>Mengganti isi value</h3>";
    //Mengganti Isi Value
    $hobi[2] = "basket";
    var_dump($hobi);
    echo"<br>";
    echo"<br>";

    echo "<h3>Menambahkan value</h3>";
    //Menambahkan Value
    $hobi[] = "membaca buku";
    var_dump($hobi);
    echo"<br>";
    echo"<br>";

    echo "<h3>Menghapus salah satu value</h3>";
    //Menghapus Salah Satu Value
    unset($hobi[3]);
    var_dump($hobi);
    echo"<br>";

    echo "<h3>Menghitung total array</h3>";
    //Menghitung Total Array
    var_dump(count($hobi));

