<?php
$owoce = array(" d"=>" mango "," a"=>" papaja "," b"=>" banan"," c"=>" aronia ");
// alfabetycznie po wartościach 
//asort($owoce);
//alfabetycznie po wartościach, odwrotnie
//arsort($owoce);
//alafabetycznie po kluczach
//ksort($owoce);
//alafabetycznie po kluczach, odwrotnie
krsort($owoce);
while(list($klucz, $wartosc) = each($owoce)){
    echo("$klucz = $wartosc");
}
echo("<br/>");
$klasa = array(" 1"=>" Oleksii "," 2"=>" Tomasz "," 3"=>" Jakub"," 4"=>" Szymon "," 5"=>" Filip "," 6"=>" Max "," 7"=>" Łukasz "," 8"=>" Kacper "," 9"=>" Bartosz "," 10"=>" Emil ");
asort($klasa);
while(list($klucz, $wartosc) = each($klasa)){
    echo("$klucz = $wartosc" . "<br/>");
}
?>
<body bgcolor="lightblue"></body>