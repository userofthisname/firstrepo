<?php
//kości
    $user="root";
    $pass="";
    $host="localhost";
    $database="uczniowie";

    $conn = new mysqli($host, $user, $pass, $database);
    mysqli_select_db($conn, $database);
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    
    $wyn = array();

    if(isset($_GET['sub'])){
        $txt="";
        $ile=$_GET['numer'];
        $sides=$_GET['sides'];
        $players=$_GET['players'];
        for($z=1; $z<=$players; $z++){
            $p=0;
            for($i=0; $i<$ile; $i++){
                $rand=rand(1, $sides);
                $p+=$rand;

            }
            $wyn[$z]=$p;
        }
        for($j=1; $j<=$players; $j++){
            $g=$wyn[$j];
            $txt="gracz $j: $g
            
            ";
            echo("gracz ". $j. ": ". $wyn[$j]. "<br>");
            fwrite($myfile, $txt);
        }
        fclose($myfile);
    }
?>
<?php
//szyfr cezara
if(isset($_GET['sub2'])){
    $slowo=$_GET['cezary'];
    $move=$_GET['przes'];
    for($i=0; $i<=strlen($slowo); $i++){
        $a=substr($slowo, $i, 1);
        $b=ord($a);
        $c=$b+$move;
        if($b>65 && $c>90 && $c<96){
            $c-=26;
        }
        else if($b>97 && $c>122){
            $c-=26;
        }
        else if($b==32){
            $c=32;
        }
        echo chr($c);

    }
}
?>


<?php
//własny szyfr
if(isset($_GET['sub3'])){
    $slowo=$_GET['own'];
    for($i=0; $i<=strlen($slowo); $i++){
        $a=substr($slowo, $i, 1);
        switch($a) {
            case 'a':
                echo(2)." ";
            break;
            case 'b':
                echo(22)." ";
            break;
            case 'c':
                echo(222)." ";
            break;
            case 'd':
                echo(3)." ";
            break;
            case 'e':
                echo(33)." ";
            break;
            case 'f':
                echo(333)." ";
            break;
            case 'g':
                echo(4)." ";
            break;
            case 'h':
                echo(44)." ";
            break;
            case 'i':
                echo(444)." ";
            break;
            case 'j':
                echo(5)." ";
            break;
            case 'k':
                echo(55)." ";
            break;
            case 'l':
                echo(555)." ";
            break;
            case 'm':
                echo(6)." ";
            break;
            case 'n':
                echo(66)." ";
            break;
            case 'o':
                echo(666)." ";
            break;
            case 'p':
                echo(7)." ";
            break;
            case 'r':
                echo(77)." ";
            break;
            case 's':
                echo(777)." ";
            break;
            case 't':
                echo(8)." ";
            break;
            case 'u':
                echo(88)." ";
            break;
            case 'w':
                echo(888)." ";
            break;
            case 'x':
                echo(9)." ";
            break;
            case 'y':
                echo(99)." ";
            break;
            case 'z':
                echo(999)." ";
            break; 
            case ' ':
                echo".";
            break; 
            default:
            echo $a;
            ;
        }
    }
}
?>


<form action="" method="get">
liczba rzutów: <input type="text" name="numer" value=""><br>
ilościenna kość: <input type="text" name="sides" value=""><br>
ilość graczy: <input type="text" name="players" value=""><br>
<input name="sub" type="submit" value="ok"><br>
</form>


<form action="" method="get">
słowo do zaszyfrowania: <input type="text" name="cezary" value=""><br>
liczba przesunięć: <input type="text" name="przes" value=""><br>
<input name="sub2" type="submit" value="ok"><br>
</form>

<form action="" method="get">
słowo do zaszyfrowania: <input type="text" name="own" value=""><br>
<input name="sub3" type="submit" value="ok"><br>
</form>