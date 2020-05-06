<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/dlogin.css">
	 <header>
	<div class="Login"> 
	<h2>Login</h2>
	<form  action="login.php" method="post"><t>
 	<label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email id.."><br>
     <label for="Password">Password</label>
    <input type="Password" id="Password" name="passwd" placeholder="Your Password.."
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

    <input type="submit" value="Submit"><br>
      OR
    <br>
   <a href="registration.html">Signup</a>
  </form>
	</div>
<?php include('footer.php'); ?>
