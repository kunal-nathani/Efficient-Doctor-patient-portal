<?php if(!isset($_SESSION)){
  session_start();
  }  
?>
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/login.css">
	 <header>
	<div class="Login"> 
	<h2>Login</h2>
	<form  action="login1.php" method="post"><t>
 	<label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email id.."><br>
     <label for="Password">Password</label>
    <input type="Password" id="Password" name="passwd" placeholder="Your Password.."
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

    <input type="submit" value="Submit"><br>
    <a href="reset.php">Reset password</a>
      OR
    <br>
   <a href="registration.html">Signup</a>
  </form>
	</div>
r
<div class="footer">
  <ul>
    <li><a href="contact.html">Contactus</a></li>
    <li><a href="feedback.html">Feedback</a></li>
</ul>
</div>  
</header>
</body>
</html>

<?php
 $con= mysqli_connect("localhost","root","");
 $db= mysqli_select_db($con,'project1');

 if(isset($_POST['email1'])){
 	$email=$_POST['email1'];
 	$passwd=$_POST['passwd'];

 	$sql="select * from signup where email='".$email."' AND passwd='".$passwd."'";
 	$result= mysqli_query($con,$sql);
 	if(mysqli_num_rows($result)==1){
 		header('Location: homepage2.html');
 		echo "successfully logged in";
 	}
 	else{
 		header('Location: login.html');
 		echo "wrong passwd";
 	}
 }
?>