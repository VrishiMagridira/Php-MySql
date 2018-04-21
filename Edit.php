<?php

include "connect.php";

$id = $_POST['index'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$phone = $_POST['nomor'];
$status = $_POST['status'];
$alamat = $_POST['alamat'];
$line = $_POST['line'];

$update ="UPDATE bukutelpon
				SET nim='$nim', nama='$nama', email='$email',
					tel='$phone', status='$status', kota_asal='$alamat',
					id_line= '$line'
					where id='$id' ";

$proses = mysqli_query($connect, $update);

mysqli_close($connect);

header('location:baca.php');





?>