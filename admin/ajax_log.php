<a href='?aksi=hapus'>Delete All</a>
<?php
error_reporting(0);
	mysql_connect("localhost","root","");
	mysql_select_db("saipuljamil");
	if($_GET['aksi']=='hapus'){
		mysql_query("TRUNCATE log");
	}
?>
<script src='jquery.js'></script>
<script>
$('document').ready(function(){
	setInterval(function(){
		$('#tampil').load('log.php')
	},1000);
	
});
</script>
<div id='tampil'></div>