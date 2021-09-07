<?php
function silnia($n){
    if($n == 1){
        return 1;
    }
    else{
        return $n*silnia($n-1);
    }
}
if(isset($_POST['show'])){
    $liczba = $_POST['liczba'];
    echo(silnia($liczba));

}


?>
<form action="" method="POST">
liczba n <input type="text" name="liczba"><br/>
<input type="submit" name="show" value="send" onclick="silnia()"><br/>
</form>