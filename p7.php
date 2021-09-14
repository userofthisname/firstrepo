<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uczniowie";
$id = "id";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['sub'])){
// sql to delete a record
   $sql = "DELETE FROM uczniowie WHERE id=$id";

   if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?> 
<form action="" method="get">
id:<input type="text" name="id"><br>
<input name="sub" type="submit" value="ok">
</form>