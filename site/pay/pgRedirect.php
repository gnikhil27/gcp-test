<?php
session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
if((!isset($_SESSION["userid"])) || $_SESSION["userid"] == ""){header("Location: ../login.php");include_once "../logout.php";die("This is madness you shouldn't be here");}
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");



$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$PLAN = $_POST["Plan"];

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;


$MSISDN = $_SESSION["mobile"];
$EMAIL = $_SESSION["email"];
$paramList["CALLBACK_URL"] = "http://mdenterprise.net/"."pay/pgResponse.php";
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; /**/

//--------------------------------Add to Transaction Table-------------------------//
$servername = "localhost";$username = "mdenterprise_devarshi";$password1 = "Barot@123!!";$dbname = "mdenterprise_devarshi";$tablename = "transcation";
$conn = new mysqli($servername, $username, $password1, $dbname);
if($conn->connect_errno == 0)
{
	$logval = (json_encode($_SERVER));
	$sql = "INSERT INTO $tablename (tid,email,amount,plan,starton,log) VALUES($ORDER_ID,'$EMAIL',$TXN_AMOUNT,'$PLAN',CURRENT_DATE(),'$logval');";
	if ($conn->query($sql) === TRUE) {}
	else die("
		<h1>There was an error storing this transaction in database.</h1>
		<hr>
		<a href='../coupon.php'>Please go back and try again</a>"
		//."<pre style='width: 100%;'>".json_encode($sql)."</pre>"
	);
}
else die("
		<h1>Secure connection to database cannot be established, database is down.</h1>
		<hr>
		<p>
		<a href='../coupon.php'>Please go back and try again, </a>
		if it still doesnt work contact site admin via email or phone
		</p>
");
//--------------------------------End of transaction Table-------------------------//

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>