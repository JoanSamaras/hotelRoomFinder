<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wda";

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die (mysqli_error());
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
