<?php
mysql_connect("localhost","root","");
mysql_select_db("saipuljamil");
$id=$_GET['id'];
$queryartikel=mysql_query("SELECT artikel.*,menu.* FROM artikel,menu WHERE artikel.idmenu=menu.idmenu AND idartikel=$id");
$tampilartikel=mysql_fetch_array($queryartikel);
session_start();
mysql_query("INSERT INTO log(kejadian,waktu) VALUES ('Username $_SESSION[username] Membuka Artikel $tampilartikel[judul]',now())");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Kirimito Project</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->
  <!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">


<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
    
    
  </head>

  <center><body>

    <script src="http://use.edgefonts.net/alice:n4.js"></script>
<script src="http://use.edgefonts.net/source-sans-pro:n2,i2,n3,i3,n4,i4,n6,i6,n7,i7,n9,i9.js"></script>
<script src="http://use.edgefonts.net/source-code-pro:n2,n3,n4,n6,n7,n9.js"></script>
<div class="post">
<br>
<h4 id="header"><br><?php echo $tampilartikel['judul'];?></h4>
<div>
  Posted on <a href="#"><?php echo $tampilartikel['tanggal'];?></a> By <?php echo $tampilartikel['pengarang'];?>
</div>
<br>
<p>
<img src='<?php echo $tampilartikel['gambar'];?>' title='<?php echo $tampilartikel['review'];?>'>
</p>
<?php echo $tampilartikel['isi'];?>
 <div id="footer"><p>Copyright &copy; Kirimito - 2016<br>
-----------------------------------------------</p></div>
<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->
  </body></center>
</html>
