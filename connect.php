<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webmuaxe";

    // Create connection
    $conn = new mysqli($server_name, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // $result = $conn->query("SELECT * FROM user");

    // if ($result->num_rows > 0) {
    //   // output data of each row
    //   while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["ID"]. " - Name: " . $row["Username"]. " - Class: " . $row["Pass"]. "<br>";
    //   }
    // } else {
    //   echo "0 results";
    // }
    // $conn->close();
?>