<?php
error_reporting(0);
session_start();
mysql_connect("localhost","root","");
mysql_select_db("saipuljamil");
?>
<link href="build/css/metro.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="build/js/metro.js"></script>
<p><a href='manager_artikel.php'>Manager Artikel</a>|<a href='manager_user.php'>Manager User</a>|<a href='ajax_log.php'>Log Aplikasi</a>|<a href='logout.php'>Logout</a></p>