<?php if(!isset($_SESSION)){
  session_start();
  }  
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Login Page</title>
<script src="js/new.js"></script>
</head>
<body>
  <div class="new">
  <div class="img1" align="left"><image src="images/logo.jpg"></div>             
<h2>DOCTOR PATIENT PORTAL</h2>
<p>your name:</p>
</div>
 <style type="text/css">
  body{
    position: sticky;
    background-image: url("images/lol4.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  } 
  *{
  margin:0px;
  padding:0px;
  font-family:times new roman;
}
.new h2{
   text-shadow: 1px 1px 2px black, 0 0 25px #008080, 0 0 5px white;
}



* {
  box-sizing: border-box;
}
.new {
  position: fixed;
  background-color: #008080;
  margin-top: 0px;
  padding: 20px;
  width: 100%;
  height: auto;
  text-align: center;
  color: #ffffff ;

}
.new img
{ 
  margin-top: 5px;
  margin-bottom: 5px;
  position: fixed;
  width: 50px;
  height: auto;
}
.new a{
  margin: 2px;
  padding: 1px;
  background-color:#01B636;
  float: right;
  color: white;
  size: 10px;
  border:1px solid white;
}
form.example input[type=text] {
  float: right;
  padding: 5px;
  font-size: 17px;
  border: 1px solid black;
  width: 20%;
  background: #f1f1f1;
}

form.example button {
  float: right;
  width: 5%;
  padding: 7px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

.new p{
  text-align:right;
}

</style>
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
      <br>
      OR
    <br>
   <a href="registration.php">Signup</a>
  </form>
	</div>


<?php include('footer.php'); ?>
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