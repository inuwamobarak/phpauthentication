<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 
?>
<script>
alert('Invalid Action!');
document.location = "signup.html"
</script>
<?php 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="keywords">
        <meta content="" name="description">      
        <link href="assets/css/style.css" rel="stylesheet">
    
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <title>Three Level Password Authentication</title>
</head>
<body>
  <header id="header" class="fixed-top-center">
    <div class="container">
      <div class="logo">
        <h1>MULTI-LEVEL PASSWORD AUTHENTICATION SYSTEM</h1>
      </div>
     </div>
  </header>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.Green {background-color: #4CAF50;} /* Green */
.Green:hover {background-color: #46a049;}

.Orange {background-color: #ff9800;} /* Orange */
.Orange:hover {background: #e68a00;}

.Pink {background-color: #FF1493;} /* Pink */
.Pink:hover {background: #0b7dda;}

.Red {background-color: #f44336;} /* Red */ 
.Red:hover {background: #da190b;}

.Purple {background-color: #800080;} /* Purple */
.Purple:hover {background: #0b7dda;}

.Blue {background-color: #0b7dda;} /* Black */ 
.Blue:hover {background: #0b7dda;}
body {
background:url("images/background_.png");
background-repeat:no-repeat;
background-size:cover;
}
</style>

<br>
<br>
<?php
  $value1 = 'green';
	$value2 = 'orange';
	$value3 = 'pink';
	$value4 = 'red';
	$value5 = 'purple';
?>

<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="signup.html">Sign up</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>
<center>
<center>
<br>
<br>
<h1>Colour Pattern</h1>
<form action="patternback.php" method = "POST">
		<input type="hidden" id="value1" value="<?php echo $value1; ?>" name="value1">
		<input type="hidden" id="value2" value="<?php echo $value2; ?>" name="value2">
		<input type="hidden" id="value3" value="<?php echo $value3; ?>" name="value3">
		<input type="hidden" id="value4" value="<?php echo $value4; ?>" name="value4">
		<input type="hidden" id="value5" value="<?php echo $value5; ?>" name="value5">
    

    
    Enter your pattern: <input type="text" id = "input1" name = "input1" value=""  placeholder = "just enter the colors shown" required>
    <br>
    <br>
    <input class = "btn Green" type="button" value="green" name="button" onclick="populateTextareaone()">
		<input class = "btn Orange" type="button" value="Orange" name="button" onclick="populateTextareatwo()"> 
		<input class = "btn Pink" type="button" value="Pink" name="button" onclick="populateTextareathree()">
		<input class = "btn Red" type="button" value="Red" name="button" onclick="populateTextareafour()">
		<input class = "btn Purple" type="button" value="Purple" name="button" onclick="populateTextareafive()">
		<br>
		<br>
		<input class = "btn Blue" type="button" value="clear" name="button" onclick="clearit()">
		<input class = "btn Blue" type="submit" value="submit" name="button" required >
    <br>
    <br>
    <p class="small">(Be sure to remember your color pattern. Do not use an easy to gues combination!)</p>

</form>
</center>

  <script type="text/javascript">
  function clearit(){
	  
  document.getElementById("input1").value = '';
  txt = '';
  
  }
	txt = ''
    function populateTextareaone() {
        txt = txt.concat(document.getElementById('value1').value);
		document.getElementById('input1').value = txt;

    }
	function populateTextareatwo() {
        txt = txt.concat(document.getElementById('value2').value);
		document.getElementById('input1').value = txt;

    }
	function populateTextareathree() {
        txt = txt.concat(document.getElementById('value3').value);
		document.getElementById('input1').value = txt;

    }
	function populateTextareafour() {
        txt = txt.concat(document.getElementById('value4').value);
		document.getElementById('input1').value = txt;

    }
	function populateTextareafive() {
        txt = txt.concat(document.getElementById('value5').value);
		document.getElementById('input1').value = txt;

    }
  </script>

  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
