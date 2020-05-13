<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Login Page</title>
<script src="js/new.js"></script>
</head>
<body>
  <div class="new">
  <div class="img1" align="left"><image src="../images/logo.jpg"></div>
  <a href="dlogin.php">Login</a><a href="dregister.php">Signup</a>                
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
  <li><a href="dhomepage.php">Home</a></li>
  <li><a href="dlogin.php">Login page</a></li>
  <li><a href="dregister.php">Registration</a></li>
  <li><a href="organs.php">Donated Organs</a></li>
  <li><a href="dfeedback.php">Feedback</a></li>
    <li><a href="contactus.php">Contactus</a></li>
</div>
</div>
 <style type="text/css">
  body{
    position: sticky;
    background-image: url("../images/lol4.jpg");
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

#sidebar{
  margin-top: 85px;
  position:fixed;
  width:200px;
  height:100%;
  background:#151719;
  left:-200px;
}
#sidebar.active{
  left:0px;
  transition: 0.7s;
}
#sidebar ul li{
  color:rgba(230,230,230,0.9);
  list-style:none;
  padding:15px 10px;
  border-bottom:1px solid rgba(100,100,100,0.3);
}
#sidebar .toggle-btn{
  position:absolute;
  left:230px;
  top:20px;
}
#sidebar .toggle-btn span{
  display:block;
  width:30px;
  height:5px;
  background:#151719;
  margin:5px 0px;
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