<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 
?>
<script>
alert('Invalid Action!');
document.location = "login.html"
</script>
<?php 
}
?>
<!doctype html>
<head>
<title>Three Level Password Authentication</title>
<link rel="icon" href="fav1.jpg" type="image/gif" sizes="16x16">
<style>
  body {
background:url("bgm6.jpg");
background-repeat:repeat-n;
background-size:1400px 900px;
}

</style>
</head>
<body><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<p> <font size=6 color="green">SUCCESSFULLY VERIFIED</font></p><br>
<p> <font size=6 color="green">THANK YOU</font></P></center>
</body>
</html>
