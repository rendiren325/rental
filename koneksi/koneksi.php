<?php

    $user = 'root';
    $pass = '325486r1@';

    $koneksi = new PDO("mysql:host=localhost;dbname=rental_mobil", $user, $pass);

    global $url;
    $url = "http://localhost/rental/";

    $sql_web = "SELECT * FROM infoweb WHERE id = 1";
    $row_web = $koneksi->prepare($sql_web);
    $row_web->execute();
    global $info_web;
    $info_web = $row_web->fetch(PDO::FETCH_OBJ);

    error_reporting(0);
?>