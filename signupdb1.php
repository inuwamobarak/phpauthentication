<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 
?>
<script>
alert('Invalid action');
document.location = "login.html"
</script>
<?php 
}
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$_SESSION['login_user'] = $email;
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$phone=$_POST['phone'];
$conn=new mysqli("localhost","root","","authentication")or die("mysqli_error()");
$c=mysqli_select_db($conn,"authentication")or die("mysqli_error()");
if (empty($name))
{
   ?>  

<script>
  alert('Please fill all fields');!
  document.location="signup.html"
  </script>  
<?php
}

elseif (empty($email))
{
     ?>       
<script>
  alert('Please fill all fields');
  document.location="signup.html"
  </script>;   
<?php
}

elseif (empty($password))
{
    ?>       
<script>
  alert('Please fill all fields');
  document.location="signup.html"
  </script>;   
<?php
}

elseif (empty($confirm_password))
{
     ?>       
<script>
  alert('Please fill all fields');
  document.location="signup.html"
  </script>;   
<?php
}

elseif (empty($phone))
{
     ?>       
<script>
  alert('Please fill all fields');
  document.location="signup.html"
  </script>; 
  <?php
}


else
{
     if($password==$confirm_password)
     {
           $sql_crt = "CREATE TABLE IF NOT EXISTS register ( `id` INT(100) NOT NULL AUTO_INCREMENT , `username` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL , `phone` VARCHAR(15) NOT NULL , PRIMARY KEY (`id`, `email`), UNIQUE (`phone`)) ENGINE = InnoDB;";
		mysqli_query($conn,$sql_crt);
         $sql= "INSERT into register(username, email, password, phone) values('$name','$email','$password','$phone')";
		 if(mysqli_query($conn,$sql))
         
            ?>       
<script>
  alert("Your details have been saved successful. Click 'OK' to continue");
  document.location="pattern.php"
  </script>;   
<?php
	         }
    else
    {
		?>
		<script>
  alert('Password and Confirm Password do not match!');
  document.location="signup.html"
  </script>; 
		 <?php
        //echo "confirm the password correctly";
        //header("Location:signup.html");
        
    }
}
?>
