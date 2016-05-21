<script src='ckeditor/ckeditor.js'></script>
<?php
require 'config.php';
$aupdate=$_GET['id'];
$querytampil=mysql_query("SELECT * FROM artikel WHERE idartikel='$aupdate'");
$dataupdate=mysql_fetch_array($querytampil);
if(isset($_POST['simpan'])){
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];
		$e=$_POST['e'];
		$f=$_POST['f'];
		$g=$_POST['g'];
		$queryaksiupdate=mysql_query("UPDATE artikel SET judul='$b',gambar='$c',review='$d',isi='$e',tanggal='$f',pengarang='$g' WHERE idartikel='$_GET[id]'");
		echo "<script>
		document.location='manager_artikel.php';
		</script>";
	}
?>
					<form method="post" action="">
					<table border='2'>
					<tr>
						<td>Judul</td>
						<td>:</td>
						<td><input type="text" name="b"
						value="<?php echo $dataupdate['judul'] ?>"></td>
					</tr>
					<tr>
						<td>Gambar</td>
						<td>:</td>
						<td><input type="text" name="c"
						value="<?php echo $dataupdate['gambar'] ?>"></td>
					</tr>
					<tr>
						<td>Review</td>
						<td>:</td>
						<td><textarea name='d'><?php echo $dataupdate['review'] ?></textarea></td>
					</tr>
					<tr>
						<td>ISI</td>
						<td>:</td>
						<td><textarea name='e'class='ckeditor'>
						<?php echo $dataupdate['isi'] ?>
						</textarea></td>
					</tr>
					<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td><input type="text" name="f"
						value="<?php echo $dataupdate['tanggal'] ?>"></td>
					</tr>
					<tr>
						<td>Pengarang</td>
						<td>:</td>
						<td><input type="text" name="g"
						value="<?php echo $dataupdate['pengarang'] ?>"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Update" name='simpan'></td>
						<td colspan='2'><input type="reset"></td>
					</tr>
					</table>
				</form>