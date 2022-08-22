<?php
				$servername = "localhost";
				$username = "mdenterprise_devarshi";
				$password1 = "Barot@123!!";
				$dbname = "mdenterprise_devarshi";
				$tablename = "user";
				
		if(isset($_POST["btnSignup"])){
			$name=$_POST['name'];
			//$phone=$_POST['number'];
			$mail=$_POST['email'];
			$password=$_POST["password"];
			$cpasswd=$_POST['cpassword'];
			$mobile=$_POST['numMobile'];
			if($name != "" && $password != "" && $mail!="")
			if($password == $cpasswd){
				$conn = new mysqli($servername, $username, $password1, $dbname);
				if($conn->connect_errno == 0)
				{
					// $sql = "INSERT INTO user (name,email,mobile,Password) VALUES('$name','$mail','$mobile',MD5('$password'))";
					$sql = "INSERT INTO $tablename (name,email,mobile,password) VALUES('$name','$mail','$mobile',MD5('$password'))";
					if ($conn->query($sql) === TRUE) {
						echo '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Success!</strong> Now You Can Login.
					  		</div>';
					}
					else{
						echo '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Error!</strong> ';
							echo "SignUp Data Error";
							// print_r($conn);
							echo '.</div>'; 
					}
				}else echo '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> Database Error: '.$conn->connect_errno.'.
				  	</div>';
				$conn->close();
			}else {
				echo '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> Password Missmatch.
				  	</div>';
			}
			else{
				echo '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> Found Empty Fields.
				  	</div>';
			}
		}
		
		if(isset($_POST["btnLogin"])){
			$mail=$_POST['email'];
			$password=$_POST["password"];		
			$conn = new mysqli($servername, $username, $password1, $dbname);

			if($conn->connect_errno == 0){
				$sql = "SELECT * FROM $tablename WHERE isActive='yes' AND email='$mail' AND Password=MD5('$password')";
				$result = $conn->query($sql);

				if ($result->num_rows == 1) {
					
					$row = $result->fetch_assoc();
					$_SESSION["userid"] = $row["userid"];
					$_SESSION["name"] = $row["name"];
					$_SESSION["mobile"] = $row["mobile"];
					$_SESSION["email"] = $row["email"];
					header("Location: coupon.php");
					echo "<script> location.href='index.php';</script>";
					echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Success!</strong> Why Still Here';
					print_r($_SESSION);
					echo '.</div>';
				}
				elseif ($result->num_rows == 0)echo '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> No Such User.
					</div>';
				else {
					echo '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Hacked!</strong> Database Hacker: Multiple User Accounts Found.
					</div>';
				}
			}else echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Error!</strong> Database Error: '.$conn->connect_errno.'.
				</div>';	
		}
?>
