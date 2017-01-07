<?php
	session_start();
	$SalerID = $_GET['SalerID'];
	echo $SalerID;
	header("Content-Type:text/html; charset=utf-8");
	include 'mysql_config.php';
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8");
	if($conn->connect_error)
	{
		die("connection failed:" . $con->connect_error);	
	}
	$buyerID = $_SESSION['UserID'];

	$searchBuyer = $conn->query("SELECT * FROM member WHERE UserID = '$buyerID'");
	while($result1 = $searchBuyer->fetch_assoc())
	{
		$buyer = $result1['UserName'];
		$buyerMail = $result1['UserMail'];
	}
	$searchSaler = $conn->query("SELECT * FROM member WHERE UserID = '$SalerID'");
	while($result2 = $searchSaler->fetch_assoc())
	{
		$saler = $result2['UserName'];
		$salerMail = $result2['UserMail'];
		$conn->query ("INSERT INTO wantList (ItemName,ItemCategory,ImgUrl,ItemInfo,OwnedBy) VALUES ()");
	}
	echo $buyer;
	echo $saler;
	echo $salerMail;
	echo $buyerMail;

	$subject = "Congrats";
	$message = "$buyer is interested in your product\nemail: $buyerMail";
	$header = "以物易物 <1515.com>";
	mail($salerMail,$subject,$message,$header);

	$subject2 = "ready to trade??";
	$message2 = "you showed interest in $saler's product\nemail: $salerMail";
	$header2 = "以物易物 <re1515>";
	mail($buyerMail,$subject2,$message2,$header2);
	
		
?>
