<?php
	error_reporting(0);
	mysql_connect("localhost","root","");
	mysql_select_db("saipuljamil");
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$query=mysql_query("SELECT * FROM user WHERE (username='$username' 
	AND password='$password') AND blokir=0");
	$data=mysql_fetch_array($query);
	$jumlah=mysql_num_rows($query);
	
	if($jumlah==1){
		session_start();
		$_SESSION['name']=$data['name'];
		$_SESSION['username']=$data['username'];
		$_SESSION['level']=$data['tipe'];
		if($_SESSION['level']=='admin'){
			header("location:manager_artikel.php");
			mysql_query("INSERT INTO log(kejadian,waktu) VALUES ('Berhasil Login username:$_SESSION[username],name:$_SESSION[name]',now())");
		}elseif($_SESSION['level']=='writer'){
			header("location:../writer/");
			mysql_query("INSERT INTO log(kejadian,waktu) VALUES ('Berhasil Login username:$_SESSION[username],name:$_SESSION[name]',now())");
		}
	}else{
		echo "Login Gagal";
		mysql_query("INSERT INTO log(kejadian,waktu) VALUES ('Gagal Login username:$username',now())");
	}
?>