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
if(isset($_POST['sub']))
		 {
            $login = $_POST['login'];
            $passwd = $_POST['passwd'];
            $sql ="select login, passwd from logdata where login ='$login' and passwd='$passwd';";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              header('Location: site.html');
            }
            else{echo "nie działa";}
     }
$conn->close();
?> 
<form action="" method="POST">
<p>zaloguj się</p>
login:<input type="text" name="login"><br>
hasło:<input type="password" name="passwd"><br>
<input name="sub" type="submit" value="ok">
</form>