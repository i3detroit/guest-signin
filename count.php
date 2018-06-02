<?php
    require 'header.php';

    require 'password.php';
    $conn = mysqli_connect($mysqlHost, $mysqlUser, $mysqlPass, $mysqlDB);

    $sql = "SELECT COUNT(*) AS count FROM waiver_data";
    $result = $conn->query($sql);

    echo "<pre>";
    printf("%d entries.", $result->fetch_assoc()["count"]);
    echo "</pre>";

    $result->close();
    require 'footer.php';

