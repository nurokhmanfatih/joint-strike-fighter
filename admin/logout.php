<?php
session_start();
session_destroy();
 
echo '<script language="javascript">alert("Anda berhasil Keluar!"); document.location="../admin";</script>';
?>