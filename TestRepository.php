<?php
require_once __DIR__ . "/GetKoneksi.php";
require_once __DIR__ . "/Model/Comments.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

use Repository\CommentRepositoryimpl;
use Model\Comment;

$koneksi = getKoneksi();
$repository = new CommentRepositoryimpl($koneksi);
$komen = new Comment(email: "wahyu123@gmail.com", komentar: "halo");
// $newcomment = $repository->insert($komen);
// var_dump($newcomment->getId());

// $komen = $repository->findById(6);
// var_dump($komen);

$komen = $repository->findAll();
var_dump($komen);


$koneksi = null;
