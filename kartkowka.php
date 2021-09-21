<?php

$min = $_GET['war'];
$max = $_GET['war2'];
for($i=0; $i<=25; $i++){
    $los = rand($min, $max);
    echo($los."<br/>");
}



?>
<form action="" method="GET">
<input type="min" name="war">
<input type="max" name="war2">
<input type="submit" value="show">

</form>