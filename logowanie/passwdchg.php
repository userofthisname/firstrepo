<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uczniowie";
$issecure = false;
$pattern ="/[A-Za-z0-9]/";
$pattern2 = '/[^.,\|][{}`~!@#$%^&*]/';
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
            $newpasswd = $_POST['newpasswd'];
            $checkpasswd = $_POST['checkpasswd'];
            $check    = preg_match($pattern, $newpasswd);
            $specialChars = preg_match($pattern2, $newpasswd); 
            $sql ="select login, passwd from logdata where login ='$login' and passwd='$passwd';";
            $result = $conn->query($sql);
            if($check && $specialChars){$issecure=true;}
            else{$issecure=false;}
            if($result->num_rows > 0 && $newpasswd=$checkpasswd && $issecure=true && strlen($newpasswd) > 8){
                $sql2 ="update logdata set passwd='$checkpasswd' where login='$login'";
                $result = $conn->query($sql2);
                echo("hy, działa");
            }
            else if($newpasswd!=$checkpasswd){echo "hasła niezgodne";}
            else if($result->num_rows <= 0){echo "zły login/hasło";}
            else if($issecure!=false){echo "słabe hasło";}
            else{echo "nie działa";}
     }
     echo strlen($newpasswd);
$conn->close();
?> 
<form action="" method="POST">
<h1>zmiana hasła</h1>
login:<input type="text" name="login"><br>
hasło:<input type="password" name="passwd"><br>
nowe hasło:<input type="password" name="newpasswd"><br>
potwierdź hasło:<input type="password" name="checkpasswd"><br>

<input name="sub" type="submit" value="ok">
</form>