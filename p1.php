<?php
if(isset($_POST['show'])){
    $pass = $_POST['pass'];
    $log = $_POST['log'];
    $name = $_POST['name'];
    $familyname = $_POST['familyname'];
    $city = $_POST['city'];

    if($log=='jacek' && $pass=='soplica'){
        echo("imie:  " . $name . "<br/>" . "familyname:  " . $familyname . "<br/>" . "city:  " . $city);
    }
    else{echo("access denied");}
}
?>


<form action="" method="POST">
login <input type="text" name="log">
hasło <input type="password" name="pass">
<input type="submit" value="show">
<br/><br/>
<form action="" method="POST">
imię <input type="text" name="name"><br/>
nazwisko <input type="text" name="familyname"><br/>
miasto <input type="text" name="city"><br/>
<input type="submit" name="show" value="send"><br/>
</form>