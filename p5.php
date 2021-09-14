<?php
   $user = 'root';
   $pass = '';
   $host = 'localhost';
   $base = 'uczniowie';    
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $imie = $_GET['imie'];
             $nazwisko = $_GET['nazw'];
             $hobby = $_GET['hobby'];
$query = "Insert into uczniowie( imie, nazwisko, hobby) values('$imie', '$nazwisko', '$hobby')";
$run = mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }

?>

<form action="" method="get">
Imie:<input type="text" name="imie"><br>
Nazwisko:<input type="text" name="nazw"><br>
hobby:<input type="text" name="hobby"><br>
<input name="sub" type="submit" value="ok">
</form>
