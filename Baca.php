<!DOCTYPE html>
<html>
<head>
 <title>Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, tr,th {
    border: 3px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
body {
	background-image: url(https://buonline.beasiswaunggulan.kemdikbud.go.id/assets/img/pattern_1.png);
background-repeat: repeat;
background-attachment: scroll;
background-clip: border-box;
background-origin: padding-box;
background-position-x: 100%;
background-position-y: 100%;
background-size: auto auto;
}
table {
border : 1px;
margin:0 auto;
width:90%
}

.container {
	background-color : white;
	background-repeat: repeat;
background-attachment: scroll;
background-clip: border-box;
background-origin: padding-box;
background-position-x: 100%;
background-position-y: 100%;
background-size: auto auto;
height:900px

	
}
.title{
	background-color:#DDD6FF;
	background-position: 100%;
background-position-y: 100%;
background-size: auto auto;

}

</style>
</head>
<body>

<div class = "container">
<br>
<div class = "title"><center><h2><br>REKAP DATA BUKU TELEPHONE </h2></center><br></div><br>

<?php
include "connect.php";
 
$sql = "SELECT id, nama, email, tel, nim, status, kota_asal, id_line "
		. "FROM bukutelpon";
$run = mysqli_query ($connect,$sql);

echo "<table border=1>";
echo "<tr>";
echo "  <th><h4>ID</h4></th><th><h4>Nama</h4></th><th><h4>NIM</h4></th>";
echo "  <th><h4>Alamat</h4></th>";
echo "  <th><h4>Status</h4></th>";
echo "  <th><h4>Nomor tlpn</h4></th><th><h4>Id_Line</h4></th><th><h4>Email</h4></th>";
echo "<th><h4>Delete</h4></th><th><h4>Update</h4></th>";
echo "</tr>";


while ($col = mysqli_fetch_array($run)){
    echo "<tr>";
    echo "  <td>" . $col['id'] . "</td>";
    echo "  <td>" . $col['nama'] . "</td>";
    echo "  <td>" . $col['nim'] . "</td>";
	echo "  <td>" . $col['kota_asal'] . "</td>";
    echo "  <td>" . $col['status'] . "</td>";
	echo "  <td>" . $col['tel'] . "</td>";
	echo "  <td>" . $col['id_line'] . "</td>";
	echo "  <td>" . $col['email'] . "</td>";
 
    echo '  <td> <a href="Delete.php?row='.$col['id'].'">DELETE</a> </td>'; 
	  echo '  <td> <a href="Update.php?rowUp='.$col['id'].'">UPDATE</a> </td>'; 
    echo "</tr>";
}
echo "</table>";
echo "</center>";
mysqli_close ($connect);

echo '<br>'.'<br>';

echo '<center>';
 echo '  <td> <a href="Form1.html?.">   <button id = "tombol" type="submit" class="btn btn-default">Tambahkan Data</button></a> </td>'; 
 echo '</center>';
?>


</div>
</body>
</html>

