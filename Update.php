<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fomulir Pendaftaran </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
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
	
#content{
background-color : white;
}

#isi {
margin-top:50px;
margin-bottom:50px;
margin-right:60px;
margin-left:60px;
}

#title {
background-color:#DDD6FF;background-position: 100%;
background-position-y: 100%;
background-size: auto auto;
}


#tombol{
background-color:#4CAF50;
color:white;}
	</style>
</head>

<body>

    <div class="container" id = "content">

        <div  class="row" id = "isi">
      <div class=row  id = "title">		
		<center>
                <h2>Update Data</h2></center></div>
            
            <br>
			
			           
            <br>
			<div style="margin-left:10px:margin-right:10px">
       
            <form action="Edit.php" method="POST" enctype="multipart/form-data">
			<input type="text" 
                    name="index" 
					value="<?php echo$_GET["rowUp"]; ?>" 
					hidden><br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Nama Lengkap </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" required>
                        </div>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label for="pwd" class="col-sm-2">NIM</label>
                        <div class="col-sm-10">
                            <input name="nim" id="pwd" class="form-control">
                        </div>
                    </div>
                </div>
				<br>
				  <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Alamat  </label>
                        <div class="col-sm-10">
                            <input name="alamat"type="text" class="form-control">
                        </div>

                    </div>
                </div>

                <br>
				  <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Status </label>
                        <div class="col-sm-10">
                            <input name="status"type="text" class="form-control">
                        </div>

                    </div>
                </div>
				<br>

                                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Email </label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control">
                        </div>

                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Nomor HP </label>
                        <div class="col-sm-10">
                            <input name="nomor"type="text" class="form-control">
                        </div>

                    </div>
                </div>
				<br>
				  <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">ID Line </label>
                        <div class="col-sm-10">
                            <input name="line"type="text" class="form-control">
                        </div>

                    </div>
                </div>
              
             	<br>
				<br>
                <div class="form-group">

                    <center>
                        <div>

                            <button id = "tombol" type="submit" class="btn btn-default">Submit</button>

                        </div>
                    </center>
					</DIV>
                </div>
            </form>

        </div>
</div>
</body>

</html>