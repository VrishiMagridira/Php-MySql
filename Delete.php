<?php

include "connect.php";

$id = $_GET['row'];

$sql = "DELETE FROM bukutelpon WHERE id = '$id'";

/*$link ini nama variabel buat koneksi php nya*/
$res = mysqli_query($connect, $sql);

mysqli_close($connect);

header('location: baca.php');
exit;
echo "hhhh";