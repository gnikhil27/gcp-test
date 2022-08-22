<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
<style type="text/css">
	.font1{
		font-family: 'Alegreya';
		text-align: center;
		font-size: 40px;
		color: blue;
		margin-bottom: 30px;
	}
	.center {
  		text-align: center;
  		margin-bottom: 10px;
	}
	.centtable{
		margin-left: auto;
  		margin-right: auto;
  		font-size: 30px;
  		column-width: 50px;
	}
	tr,td{
		margin-right: 10px;
	}
	.cckout{
		color: white;
		background-color: #27ae60;
	}
	button {
  		border: none;
  		cursor: pointer;
  		width: 100%;
  		height: 50px;
	}
</style>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<h1 class="font1">Merchant Check Out Page</h1>
	<!--div style="align-content: center;" class="center"><img src="images/invest.jpg" style="height: 250px;width: 500px;"></div-->
	<div style="text-align: center;color: #2980b9;font-size: 15px;margin-top: 20px;"><font style="font-size: 20px;"><i class="fas fa-hand-point-right"></i>Take your first step towards your financial awakening.<p><i class="fas fa-hand-point-right"></i>
	Choose a plan which suits you and get the advantage of our professional understanding in investment.<p><i class="fas fa-hand-point-right"></i>Our clients have built a great portfolio over the time period and have got best returns on their investment. We are dedicated to our clients profits.We are known by their return on investments.<p><i class="fas fa-hand-point-right"></i>Your profit and trust is our wealth.</font></div>
	<form method="post" action="pgRedirect.php">
		<table class="centtable">
			<tbody>
				<tr style="color: white;background-color: #2980b9;">
					<td><label style="padding-left: 100px;">ORDER_ID</label></td>
					<td style="display: none;"><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php $userid=$_POST['uname'];
						$password=$_POST['psw'];
						$servername = "localhost";
						$username = "ckifm_user";
						$dbname = "ckifm_king";
						$conn = mysqli_connect($servername, $username, "King@123", $dbname);
						if (!$conn) {
  							die("Connection failed: " . mysqli_connect_error());
						}
						$sql = "SELECT id, name,Product FROM user where email='".$userid."' and Password='".$password."'";
						$result = mysqli_query($conn, $sql);
						$userident=$userid.rand(100,99999999);
						echo($userident);
						if (mysqli_num_rows($result) > 0) {
  							while($row = mysqli_fetch_assoc($result)) {
  								$userid=$row['id'];
  								$name=$row['name'];
  								$Product=$row['Product'];
  							}
  						}
  						else {
  							$newURL="https://www.ckifm.com/";
							header(header('Location: '.$newURL));
						}
						mysqli_close($conn);
						?>">
					</td>
					<td style="padding-left: 30px;"><?php echo($userident);?></td>
				</tr>
				<tr style="color: white;background-color: #27ae60;">
					<td><label style="padding-left: 100px;">CUSTID</label></td>
					<td style="display: none;"><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php
					$custid="CUST".$userid.rand(100,99999999);
					echo($custid);
					?>"></td>
					<td style="padding-left: 30px;"><?php echo ($custid); ?></td>
				</tr>
				<tr style="display: none;">
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr style="display: none;">
					<td>4</td>
					<td><label>Channel</label></td>
					<td style="display: none;"><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr style="color: white;background-color: #2980b9;">
					<td><label style="padding-left: 100px;">Investment Plan</label></td>
					<td style="padding-left: 30px;">
					<select name="TXN_AMOUNT" id="TXN_AMOUNT" title="TXN_AMOUNT">
    					<option value="9999.00">Basic Plan</option>
    					<option value="19999.00">Silver Plan</option>
    					<option value="29999.00">Gold Plan</option>
    					<option value="49999.00">Platinum Plan</option>
  					</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><font style="text-align: center; font-size: 50px;"><button type="submit" value="CheckOut" class="cckout"><i class="fa fa-shopping-cart" style="color: red;font-size: 30px;"></i><font style="font-size: 30px;">CheckOut</font></button></font></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>