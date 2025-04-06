<?php
include 'config.php';

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$nim    = $_POST['nim'];
$alamat = $_POST['alamat'];

$conn->query("UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id=$id");
header("Location: index.php");