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
    
    
    </style>
</head>
<body>
  <header id="header" class="fixed-top-center">
    <div class="container">
      <div class="logo">
        <h1>MULTI-LEVEL PASSWORD AUTHENTICATION SYSTEM</h1>
      </div>
     </div>
  </header>

<html>

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

.Blue {background-color: #0b7dda;} /* Blue */ 
.Blue:hover {background: #da190b;}

.Pink {background-color: #FF1493;} /* Pink */
.Pink:hover {background: #0b7dda;}

.Red {background-color: #f44336;} /* Red */ 
.Red:hover {background: #da190b;}

.Purple {background-color: #800080;} /* Purple */
.Purple:hover {background: #0b7dda;}

.Blue {background-color: #0b7dda;} /* Blue */ 
.Blue:hover {background: #0b7dda;}
body {
background:url("images/bgm6.jpg");
background-repeat:repeat-n;
background-size:1400px 900px;
}
</style>

<br><br>
<?php
    $value1 = 'banana';
	$value2 = 'blueberry';
	$value3 = 'pear';
	$value4 = 'orange';
	$value5 = 'strawberry';
    $value6 = 'grape';
	$value7 = 'tomatoe';
	$value8 = 'apple';
	$value9 = 'melon';
	$value10 = 'pineapple';
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
<h1>Pattern Login</h1>
<form action="loginfruitpatternfront.php" method = "POST">
		<input type="hidden" id="value1" value="<?php echo $value1; ?>" name="value1">
		<input type="hidden" id="value2" value="<?php echo $value2; ?>" name="value2">
		<input type="hidden" id="value3" value="<?php echo $value3; ?>" name="value3">
		<input type="hidden" id="value4" value="<?php echo $value4; ?>" name="value4">
		<input type="hidden" id="value5" value="<?php echo $value5; ?>" name="value5">
        <input type="hidden" id="value6" value="<?php echo $value6; ?>" name="value6">
        <input type="hidden" id="value7" value="<?php echo $value7; ?>" name="value7">
        <input type="hidden" id="value8" value="<?php echo $value8; ?>" name="value8">
        <input type="hidden" id="value9" value="<?php echo $value9; ?>" name="value9">
        <input type="hidden" id="value10" value="<?php echo $value10; ?>" name="value10">
        
        <div class="form-group">
            <label>Enter your pattern</label>
            <input type="text" id = "input1" name = "input1" value="" placeholder= " you could just type" required required placeholder = "just enter the colors shown">
        </div>

		<input class = "btn Orange" type="button" value="Banana" name="button" onclick="populateTextareaone()">
		<input class = "btn Blue" type="button" value="Blueberry" name="button" onclick="populateTextareatwo()"> 
		<input class = "btn Green" type="button" value="Pear" name="button" onclick="populateTextareathree()">
		<input class = "btn Orange" type="button" value="Orange" name="button" onclick="populateTextareafour()">
        <input class = "btn Purple" type="button" value="Strawberry" name="button" onclick="populateTextareafive()">
        <br>
        <br>
        <input class = "btn Green" type="button" value="Grape" name="button" onclick="populateTextareasix()">
        <input class = "btn Red" type="button" value="Tomatoe" name="button" onclick="populateTextareaseven()">
        <input class = "btn Purple" type="button" value="Apple" name="button" onclick="populateTextareaeight()">
        <input class = "btn Green" type="button" value="Melon" name="button" onclick="populateTextareanine()">
        <input class = "btn Orange" type="button" value="Pineapple" name="button" onclick="populateTextareaten()">
		<br>
		<br>
		<input class = "btn Blue" type="button" value="clear" name="button" onclick="clearit()">
        <input class = "btn Blue" type="submit" value="submit" name="button" required >
        <br>
        <br>
        <a href="contact.html" class="small">Forgotten your pattern? Contact admin.</a>
		

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
    function populateTextareasix() {
        txt = txt.concat(document.getElementById('value6').value);
		document.getElementById('input1').value = txt;

    }
    function populateTextareaseven() {
        txt = txt.concat(document.getElementById('value7').value);
		document.getElementById('input1').value = txt;

    }
    function populateTextareaeight() {
        txt = txt.concat(document.getElementById('value8').value);
		document.getElementById('input1').value = txt;

    }
    function populateTextareanine() {
        txt = txt.concat(document.getElementById('value9').value);
		document.getElementById('input1').value = txt;

    }
    function populateTextareaten() {
        txt = txt.concat(document.getElementById('value10').value);
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
