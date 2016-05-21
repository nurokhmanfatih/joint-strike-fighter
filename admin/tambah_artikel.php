<?php
include "config.php";
if(isset($_POST['simpan'])){
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$simpan=mysql_query("INSERT INTO artikel(idmenu,judul,gambar,review,isi,tanggal,pengarang) VALUES ('$a','$b','$c','$d','$e',now(),'$f')");
	if($simpan){
		echo "Berhasil";
		echo "<script>
		document.location='manager_artikel.php';
		</script>";
		mysql_query("INSERT INTO log(kejadian,waktu) VALUES ('Username $_SESSION[username] Berhasil Menambahkan Artikel Dengan Judul Artikel $b',now())");
	}else{
		echo mysql_error($simpan);
		mysql_query("INSERT INTO log(kejadian,waktu) VALUES ('Username $_SESSION[username] Gagal Menambahkan Artikel Dengan Judul Artikel $b',now())");
	}
	}
?>
<head>
	<script src='ckeditor/ckeditor.js'></script>
</head>
<body>
<form name='artikel' method='POST'>
	<table border='1'>
		<tr>
			<td>Menu</td>
			<td>:</td>
			<td><select name='a'>
				<?php
				$querymenu=mysql_query("SELECT * FROM menu");
				while($tampilmenu=mysql_fetch_array($querymenu)){
					echo "<option value='$tampilmenu[idmenu]'>$tampilmenu[namamenu]</option>";
				}
				?>
			</select></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input name='b' type="text"></td>
		</tr>
		<tr>
			<td>URL Gambar</td>
			<td>:</td>
			<td><input name='c' type="text"></td>
		</tr>
		<tr>
			<td>Review</td>
			<td>:</td>
			<td><textarea name='d'>
			
			</textarea></td>
		</tr>
		<tr>
			<td>ISI</td>
			<td>:</td>
			<td><textarea name='e' class='ckeditor'>
			
			</textarea></td>
		</tr>
				</tr>
		<tr>
			<td>Pengarang</td>
			<td>:</td>
			<td><input name='f' type="text"></td>
		</tr>
				</tr>
		<tr>
			<td colspan='2'><input type='submit' value='Tambah' name='simpan'></td>
			<td><input type='reset'></td>
		</tr>
	</table>
</form>
</body>