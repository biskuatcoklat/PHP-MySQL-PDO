<?php
require_once __DIR__ . '/GetKoneksi.php';

$koneksi = getKoneksi();

$sql = "SELECT * FROM customer";
$statement = $koneksi->query($sql);

$costumer = $statement->fetchAll();
var_dump($costumer);
