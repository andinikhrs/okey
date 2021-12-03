<html>
    <head>
        <title> soal 3 </title>
    <head>  
        <body align="center">

    
            <FORM ACTION="" METHOD="POST" NAME="INPUT">
            <table align="center">
                <H2><b>FORM PENGULANGAN</b></H2>
                <tr>
                <td></td>
                <td></td>
            <td>1. Deret Bilangan Ganjil</td>
</tr>
<tr>
                <td></td>
                <td></td>
            <td>2. Segitiga Sama Kaki Terbalik</td>
</tr>
<tr>
                <td></td>
                <td></td>
            <td>3. Deret Bilangan Ketiga</td>
</tr>
           
            </td>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="number" name="pilih"></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="number" name="masukkan"></td>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="KIRIM"></td>
            </tr>
</table>
        </FORM>

    </body>
</html>

<?php
    if (isset($_POST ['kirim'])){
        $p = $_POST ['pilih'];
        $a = $_POST ['masukkan'];

        if ($p == 1){
            echo "<center>";
            echo "<h3>Deret Bilangan Ganjil</h3>";
            for ($i = 1; $i <= $a; $i+=2){
                echo "$i ";
            }
            echo "</center>";
        }elseif($p == 2){
            echo "<center>";
            echo "<h3>Segitiga Sama Kaki Terbalik</h3>";
            for ($i = $a; $i >= 1; $i--){
                for ($v = $a; $v > $i; $v--){
                    echo " ";
                }for ($c = 1; $c <= $i; $c++){
                    echo "* ";
                }
                echo "<br>";
            }
            echo "</center>";
        }elseif ($pilih == 3){
            echo "<center>";
            echo "<h3>Deret Bilangan Kelipatan 3</h3>";
            for ($x = 3; $i <= $a; $i+=3){
                echo "$i ";
            }
            echo "</center>";
        }
    }
    ?>