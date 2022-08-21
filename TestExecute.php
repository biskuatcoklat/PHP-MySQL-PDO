<?php
require_once __DIR__ . '/GetKoneksi.php';

$koneksi = getKoneksi();
$sql = <<<SQL
    INSERT INTO customer(id,nama,email,alamat)
    VALUES("","Wahyu Aprilliandhika","wahyuandhika@gmail.com","Medan SUMUT");
SQL;
$koneksi->exec($sql);
$koneksi = null;

/*
    PDO memiliki function bernama query (sql), ini digunakan untuk melakukan query data
    dari database

    Return valuedari sebuah function query (sql) adalah sebuah object dari PDOstatement
*/
