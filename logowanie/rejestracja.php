<?php
   $user = 'root';
   $pass = '';
   $host = 'localhost';
   $base = 'uczniowie';    
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_POST['sub']))
		 {
            $login = $_POST['login'];
            $passwd = $_POST['passwd'];
            $name = $_POST['name'];
            $lname = $_POST['lname'];
            $school = $_POST['school'];
            $adress = $_POST['adress'];
            $phone = $_POST['phone'];
$query = "Insert into logdata( login, passwd, name, lname, school, adress, phone) values( '$login', '$passwd', '$name', '$lname', '$school', '$adress', '$phone')";
$run = mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "udało ci się zarejetrować";
}
else{
    echo "no kiepsko trochę";
}
         }

?>

<form action="" method="POST">
<p>Zrób se konto</p>
login:<input type="text" name="login"><br>
hasło:<input type="password" name="passwd"><br>
imie:<input type="text" name="name"><br>
nazwisko:<input type="text" name="lname"><br>
szkoła:<input type="text" name="school"><br>
adres:<input type="text" name="adress"><br>
telefon:<input type="text" name="phone"><br>
<input name="sub" type="submit" value="ok">
</form>