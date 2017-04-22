<?php
	require 'header.php';
	
    require 'password.php';
	$conn = mysqli_connect($mysqlHost, $mysqlUser, $mysqlPass, $mysqlDB);

	echo "<div data-role='content' style='padding: 15px'>\n";
	echo "<div data-role='page' id='pMain'>\n";
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	//echo 'Connected successfully';
	//echo "Hello\n";
	//var_dump($_GET);
	$sql = "INSERT INTO waiver_data (fname, lname, assent1, assent2, assent3, assent4, phone, address, ec_name, ec_phone, ec_relate, signature) VALUES ('" .
	$_GET['first'] . "','" .
	$_GET['last'] . "'," .
	$_GET['q1'] . "," .
	$_GET['q2'] . "," .
	$_GET['q3'] . "," .
	$_GET['q4'] . ",'" .
	$_GET['ph'] . "','" .
	$_GET['addr'] . "','" .
	$_GET['emcon'] . "','" .
	$_GET['emph'] . "','"	.
	$_GET['emr'] . "','" .
	$_GET['sigdata'] . "')";
	//echo $sql;
	
	if ($conn->query($sql) === TRUE) {
		
		echo "New record created successfully";
		echo "<script>";
		echo "window.location.replace(\"https://www.i3detroit.org/whysman/i3-signin/\");";
		echo "</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
	
	echo "</div></div>";
	require 'footer.php';
	
?>
