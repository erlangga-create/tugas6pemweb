<?php
include 'config.php';
$nama   = $_POST['nama'];
$nim    = $_POST['nim'];
$alamat = $_POST['alamat'];

$conn->query("INSERT INTO mahasiswa (nama, nim, alamat) VALUES ('$nama', '$nim', '$alamat')");
header("Location: index.php");