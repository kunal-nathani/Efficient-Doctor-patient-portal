						<?php	
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "project1";

							// Create connection
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
							if (!$conn) {
							    die("Connection failed: " . $conn->connect_error);
							}
						?>	