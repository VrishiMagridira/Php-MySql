<?php
$user = 'user1';
$pass = 'vrishimp123';
$host ='127.0.0.1';
$db = 'butel';

$connect= mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()){
	echo "koneksi gagal";
	exit;
}
