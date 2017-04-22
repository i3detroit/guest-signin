<?php
	require 'header.php';
	
    require 'password.php';
	$conn = mysqli_connect($mysqlHost, $mysqlUser, $mysqlPass, $mysqlDB);

	$sql = "select * from waiver_data";
	$result = $conn->query($sql);
	$result->data_seek(0);
	echo "<table>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['fname'] . "</td>";
		echo "<td>" . $row['lname'] . "</td>";
		echo "<td>" . $row['assent1'] . "</td>";
		echo "<td>" . $row['assent2'] . "</td>";
		echo "<td>" . $row['assent3'] . "</td>";
		echo "<td>" . $row['assent4'] . "</td>";
		echo "<td>" . $row['phone'] . "</td>";
		echo "<td>" . $row['address'] . "</td>";
		echo "<td>" . $row['ec_name'] . "</td>";
		echo "<td>" . $row['ec_phone'] . "</td>";
		echo "<td>" . $row['ec_relate'] . "</td>";
		echo "<td><img src='data:" . $row['signature'] . "'></td>";
		echo "</tr>";
	}
	echo "</table>";
	$conn->close();
	require 'footer.php';
?>
