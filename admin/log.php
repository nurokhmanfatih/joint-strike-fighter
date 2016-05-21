<table border='1'>
	<tr>
		<td>ID Log</td>
		<td>Kejadian</td>
		<td>Waktu</td>
	</tr>
	<?php
	error_reporting(0);
	mysql_connect("localhost","root","");
	mysql_select_db("saipuljamil");
	$query=mysql_query("SELECT * FROM log");
	while($data=mysql_fetch_array($query)){
		echo "
		<tr>
		<td>$data[idlog]</td>
		<td>$data[kejadian]</td>
		<td>$data[waktu]</td>
		</tr>
		";
	}
	?>
</table>