<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uczniowie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uczniowie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo"<table>";
  while($row = $result->fetch_assoc()) {
    echo"<tr >";
    echo "<td bgcolor='green'>". "id: " . $row["id"]. "</td>". "<td bgcolor='yellow'>". " imie: " . $row["imie"]. "</td>". "<td bgcolor='red'>". " nazwisko: " . $row["nazwisko"]. "</td>". "<td bgcolor='blue'>". " hobby: ". $row["hobby"]. "<br>";
    echo"</tr>";
  }
  echo"</table>";
} else {
  echo "0 results";
}
$conn->close();
?> 