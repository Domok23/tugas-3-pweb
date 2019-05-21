<html>
<head>
	<title>Wahyu Oktavian</title>
</head>
<body>
	<p>Tugas 3 : Validasi Data dengan PHP</p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  	<input type="text" class="search" name="nama" required="required" placeholder="Masukkan Nama Anda">
  	<br><br>
  	<input type="text" class="nim" name="NIM" required="required" placeholder="Masukkan NIM Anda" maxlength="10">

<br><br>
<input class="button" type="submit" value="Submit">
<?php
$nama = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];
if (!is_numeric($_POST["NIM"])){
	echo "<br><br>UPSS... NIM HARUS ANGKA!";
}
else if(strlen($_POST["NIM"])!=10){
	echo "<br><br>UPSS... NIM harus 10 angka!";
}
else if(!empty($nama) && !empty($NIM) ){
echo "<center><br><br><b>Selamat Datang </b>".$nama.", NIM : ".$NIM."</center>";
}
}
?>
</form>

</div>
</body></html>