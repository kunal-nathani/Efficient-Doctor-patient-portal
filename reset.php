<?php include('header.php'); ?>
<div class="q">
	<h3>Reset Password</h3>
<label for="old password">Old Password</label><br>
<input type="text" name="opassword" ><br>
<label for="new password">New password</label><br>
<input type="text" name="npassword" ><br>
<input type="submit" name="">
</div>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
        .new{
        	margin-top: -200px;
        }
        #sidebar{
        	margin-top: -115px;
        }
        .q{
			  border: 3px solid #008080;
			  background-color: #008080;
			  padding: 70px;
			  margin-top: 200px;
			  margin-left: 200px;
			  margin-right: 200px;
			  border-radius: 10px;
			  box-shadow: 10px 10px 5px grey;
			  color: white;
			}
			.q h3{
			  text-shadow: 1px 1px 2px black, 0 0 25px #008080, 0 0 5px white;
			  text-align: center;
			  margin: 3px;
			}
			input[type=text], select {
			  width:100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
			}
			input[type=submit] {
			  width: 40%;
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: =13px 0;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			  margin-left:125px;
			  box-shadow: #f2f2f2;
			}

			input[type=submit]:hover {
			  background-color: #45a049;
			}
</style>
<?php include('footer.php'); ?>