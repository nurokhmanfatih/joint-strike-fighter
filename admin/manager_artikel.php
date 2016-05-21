<?php
	require "config.php";
	if($_GET['aksi']=='hapus' OR $_GET['aksi2']=='hapus'){
		$query=mysql_query("DELETE FROM artikel WHERE idartikel='$_GET[id]'");
		mysql_query("INSERT INTO log(kejadian,waktu) VALUES ('Username $_SESSION[username] Menghapus Artikel Dengan ID Artikel $_GET[id]',now())");
	}
	?>
<script src='ckeditor/ckeditor.js'></script>
<form method="post" action="?aksi=cari">
	<table border='1'>
	<tr>
		<td>Search :</td>
		<td><input type="text" name="search"></td>
		<td><input type="submit" value="Search"></td>
	</tr>
	</table>
</form>
<a href="tambah_artikel.php">Tambah Artikel</a>
<?php
	$query2=mysql_query("SELECT * FROM artikel");
	if($_GET['aksi']=='cari'){
		$a=$_POST['search'];
		$query=mysql_query("SELECT * FROM artikel WHERE judul LIKE '%$a%'");
		mysql_query("INSERT INTO log(kejadian,waktu) VALUES ('Username $_SESSION[username] Mencari Artikel Dengan Keyword Artikel $a',now())");
	?>
	<table border='1'>
		<tr>
		<th>Judul</th>
		<th>Gambar</th>
		<th>Review</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Pengarang</th>
		<th>Action</th>
		</tr>
	<?php
	while($data=mysql_fetch_array($query)){
		$isi=htmlentities($data[isi]);
		echo "<tr>
			<td>$data[judul]</td>
			<td>$data[gambar]</td>
			<td>$data[review]</td>
			<td>$isi</td>
			<td>$data[tanggal]</td>
			<td>$data[pengarang]</td>
			<td><a href='?aksi2=hapus&id=$data[idartikel]'>Hapus</a>
			| <a href='edit_artikel.php?id=$data[idartikel]'>Edit</a></td>
		</tr>";
	}
	echo "</table>";
	}else{
		?>
		<table border='1'>
		<tr>
		<th>Judul</th>
		<th>Gambar</th>
		<th>Review</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Pengarang</th>
		<th>Action</th>
		</tr>
	<?php
	while($data2=mysql_fetch_array($query2)){
		$isi=htmlentities($data2[isi]);
		echo "<tr>
			<td>$data2[judul]</td>
			<td>$data2[gambar]</td>
			<td>$data2[review]</td>
			<td>$isi</td>
			<td>$data2[tanggal]</td>
			<td>$data2[pengarang]</td>
			<td><a href='?aksi2=hapus&id=$data2[idartikel]'>Hapus</a>
			| <a href='edit_artikel.php?id=$data2[idartikel]'>Edit</a></td>
		</tr>";
	}
		echo "</table>";
	}

?>
</center>
</div>