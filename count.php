<?php
    require 'header.php';

    require 'password.php';
    $conn = mysqli_connect($mysqlHost, $mysqlUser, $mysqlPass, $mysqlDB);

    $sql = "SELECT DATE_FORMAT(timestamp, '%Y') as 'year',
	COUNT(id) as 'total'
	FROM waiver_data
	GROUP BY DATE_FORMAT(timestamp, '%Y')";
    $result = $conn->query($sql);

    echo "<pre>";
    if($result) {
	#printf("%d entries.", $result->fetch_assoc()["count"]);
	while ($row = $result->fetch_assoc()) {
	    print_r($row);
	}
    } else {
	echo "query failed";
	print_r($conn->error);
    }
    echo "</pre>";

    $conn->close();
    require 'footer.php';

