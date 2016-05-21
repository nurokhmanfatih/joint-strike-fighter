<link rel="stylesheet" href="style.css" type="text/css">
<div class="content">
<center>
<?php
	require "config.php";
	if($_GET['aksi']=='hapus' OR $_GET['aksi2']=='hapus'){
		$query=mysql_query("DELETE FROM obat WHERE kodeobat='$_GET[id]'");
	}
	if(isset($_POST['simpan'])){
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];
		$e=$_POST['e'];
		$queryaksiupdate=mysql_query("UPDATE obat SET nmobat='$b',merk='$c',satuan='$d',hargajual='$e' WHERE kodeobat='$_GET[id]'");
	}
?>
<a href="tambahobat.php">Tambah Obat</a>
<form method="post" action="?aksi=cari">
	<table border='1' class='table-responsive'>
	<tr>
		<td>Search :</td>
		<td><input type="text" name="search"></td>
		<td><input type="submit" value="Search" class="btn btn-default"></td>
	</tr>
	</table>
</form>
<?php
	$query2=mysql_query("SELECT * FROM obat");
	if($_GET['aksi']=='cari'){
		$a=$_POST['search'];
		$query=mysql_query("SELECT * FROM obat WHERE nmobat LIKE '%$a%'");
	?>
	<table border='1' class='table-responsive'>
		<tr>
		<th>Kode Obat</th>
		<th>Nama Obat</th>
		<th>Merk</th>
		<th>Satuan</th>
		<th>Harga Jual</th>
		<th>Action</th>
		</tr>
	<?php
	while($data=mysql_fetch_array($query)){
		echo "<tr>
			<td>$data[kodeobat]</td>
			<td>$data[nmobat]</td>
			<td>$data[merk]</td>
			<td>$data[satuan]</td>
			<td>Rp.$data[hargajual]</td>
			<td><a href='?aksi2=hapus&id=$data[kodeobat]'>Hapus</a>
			| <a href='?aksi2=update&id=$data[kodeobat]'>Edit</a></td>
		</tr>";
	}
	echo "</table>";
	}else{
		if($_GET['aksi']=='update' OR $_GET['aksi2']=='update'){
			$aupdate=$_GET['id'];
			$querytampil=mysql_query("SELECT * FROM obat WHERE kodeobat='$aupdate'");
			$dataupdate=mysql_fetch_array($querytampil);
			?>
					<form method="post" action="">
					<table border='2' class='table-responsive'>
					<tr>
						<td>Nama Obat</td>
						<td>:</td>
						<td><input type="text" name="b"
						value="<?php echo $dataupdate['nmobat'] ?>"></td>
					</tr>
					<tr>
						<td>Merk</td>
						<td>:</td>
						<td><input type="text" name="c"
						value="<?php echo $dataupdate['merk'] ?>"></td>
					</tr>
					<tr>
						<td>Satuan</td>
						<td>:</td>
						<td><input type="text" name="d"
						value="<?php echo $dataupdate['satuan'] ?>"></td>
					</tr>
					<tr>
						<td>Harga Jual</td>
						<td>:</td>
						<td><input type="text" name="e"
						value="<?php echo $dataupdate['hargajual'] ?>"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Update" name='simpan'></td>
						<td colspan='2'><input type="reset"></td>
					</tr>
					</table>
				</form>
			<?php
		}
		?>
		<table border='1' class='table-responsive'>
		<tr>
		<th>Kode Obat</th>
		<th>Nama Obat</th>
		<th>Merk</th>
		<th>Satuan</th>
		<th>Harga Jual</th>
		<th>Action</th>
		</tr>
		<?php
		while($data2=mysql_fetch_array($query2)){
		echo "<tr>
			<td>$data2[kodeobat]</td>
			<td>$data2[nmobat]</td>
			<td>$data2[merk]</td>
			<td>$data2[satuan]</td>
			<td>Rp.$data2[hargajual]</td>
			<td><a href='?aksi=hapus&id=$data2[kodeobat]'>Hapus</a> | <a href='?aksi=update&id=$data2[kodeobat]'>Edit</a></td>
		</tr>";
	}
		echo "</table>";
	}

?>
</center>
</div>