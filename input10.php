<?php
$star=5;
    for ($a = 1; $a<=5; $a++){
    for ($i = 1; $i<=$a; $i++){
        echo" &nbsp ";
    }
    for ($c=5; $c>=$a; $c-=1){
          echo"*";
    }
    echo"<br>";
   
}
?>