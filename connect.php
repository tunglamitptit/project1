<?php
$server_name = "localhost";
$username = "root";
$password = "";
// $dbname = "test";

// Create connection
$conn = new mysqli($server_name, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $result = $conn->query("SELECT * FROM student");

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["ID"]. " - Name: " . $row["FullName"]. " - Class: " . $row["Class"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn->close();
?>