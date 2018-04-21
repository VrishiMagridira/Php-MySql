<?php

include "connect.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$phone = $_POST['nomor'];
$status = $_POST['status'];
$alamat = $_POST['alamat'];
$line = $_POST['line'];

$insert = "INSERT INTO bukutelpon (nama,nim,kota_asal,status,tel,id_line,email )"
			."VALUES ('$nama','$nim','$alamat','$status','$phone','$line','$email' )";
			
$run = mysqli_query ($connect,$insert);

if ($run)
echo "Data berhasil disimpan!";

else echo mysqli_error($connect);

header('location: baca.php');

mysqli_close($connect);