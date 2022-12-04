<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 
?>
<script>
alert('Please review your registration again');
document.location = "signup.html"
</script>
<?php 
}
	session_start();
	$fruitpattern = $_POST['input1'];
	$user = $_SESSION['login_user'];
	echo $user;
	echo $fruitpattern;
	$conn=new mysqli("localhost","root","","authentication")or die("mysqli_error()");
	$sqlcreate = "CREATE TABLE IF NOT EXISTS fruitpattern ( `id` INT(100) NOT NULL AUTO_INCREMENT , `username` VARCHAR(100) NOT NULL , `fruitpattern` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`, `username`)) ENGINE = InnoDB;";
	mysqli_query($conn,$sqlcreate);
	$sql= "INSERT into fruitpattern(username, fruitpattern) values('$user','$fruitpattern')";
	if(mysqli_query($conn,$sql)){
	header("location:login.html");}
	else{
		?>
	<script>
	alert('reenter the pattern please');
	document.location = "pattern.php"
	</script>
	<?php
	}
?>