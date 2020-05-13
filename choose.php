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
  <header>
<div id="sidebar">
<div class="toggle-btn" onclick="togglesidebar()">
  <span></span>
  <span></span>
  <span></span>
  </div>
    <ul>
  <li><a href="homepage2.php">Home</a></li>
  <li><a href="loginl.php">Login page</a></li>
  <li><a href="registration.php">Registration</a></li>
  <li><a href="history.php">History</a></li>
  <li><a href="#">Appointment</a></li>
  <li><a href="organdonationl.php">Organ Donation</a></li>
  <li><a href="feedback.php">Feedback</a></li>
</ul>
</div>
</div>
<link rel="stylesheet" type="text/css" href="css/choose.css">
 <style type="text/css">
	.patient{
	    margin-top:200px;
		text-align: center;
		margin-right: 350px;
	}
	.doctor{
		margin-top: -210px;
		text-align: center;
	}
	#Patient
	{
		position: sticky;
		border: 3px solid black;
		width: 150px;
		height: auto;
		background-color: white;
		padding: 20px;	
	}
	#Doctor
	{	
		position: sticky;
		border: 3px solid black;
		width: 150px;
		height: auto;
		background-color: white;
		padding: 20px;
		padding-top: 20px; 
		padding-bottom:25px;
	}
	  body{
    position: sticky;
    background-image: url("images/lol4.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  } 
	</style>
<div class="button">
	<div class="patient">
		<a href="loginl.php"><img src="images/patient.png" id="Patient"></a><br>
		<a href="loginl.php">Patient</a>
	</div>
	<div class="doctor">
		<a href="doctor/dlogin.php"><img src="images/doctor.png" id="Doctor"></a><br>
		<a href="doctor/dlogin.php">Doctor</a>
	</div>

</div>
<div class="footer">
  <ul>
    <li><a href="contact.html">Contactus</a></li>
    <li><a href="feedback.html">Feedback</a></li>
</ul>
</div>
</body>
</html>