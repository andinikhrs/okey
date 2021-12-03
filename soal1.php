<html>
    <head>
        <title> soal 1 </title>
    </head>  
    <body>
        <div style="margin: 0px 420px; text-align:center; border: 2px solid black">
            <H2><b>SYARAT MASUK MIKO MALL</b></H2>
            <FORM ACTION="" METHOD="POST" NAME="INPUT">
                <table style="margin: 0px auto">
                    <tr>
                        <td>Nama Anda </td>
                        <td> : </td>
                        <td> <input type="text" name="nama" required> </td>
                    </tr>
                    <tr>
                        <td>Status Vaksin </td>
                        <td> : </td>
                        <td>
                            <select name="status_vaksin" id="">
                                <option value="---status vaksin---" name="---status vaksin---">---status vaksin---</option>
                                <option value="sudahvaksin" name="sudahvaksin">Sudah Vaksin</option>
                                <option value="belumvaksin" name="belumvaksin">Belum Vaksin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center;"><input type="submit" name="kirim"  value="kirim"></td>
                    </tr>
                </table>
            </FORM>


<?php

if (isset($_POST['kirim'])) {
    $nami = $_POST['nama'];
    $status = $_POST['status_vaksin'];
    
    echo "<div style='margin-left:10px'>";
    echo "<h3> Hasil </h3>";
    echo "<hr style='width:50px'>";
    echo "<table style='margin: 0px auto'>";
    echo "<tr>";
    echo "<td> Nama Anda <td>";
    echo "<td> : <td>";
    echo "<td>".$nami."<td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Status Vaksin <td>";
    echo "<td> : <td>";
    echo "<td>".$status."<td>";
    echo "</tr>";
    echo "</table>";
    
    if ($status == "sudahvaksin"){ 
        echo "<h2 style='color: green;'><b> Diizinkan </b></h2>";
    } else { 
        echo "<br>";
        echo "<h2 style='color:red;'><b> Ditolak </b></h2>";
        echo "<br>";
        echo "<a href='https://www.pedulilindungi.id'>Silahkan Daftar Vaksin</a>";
    }
    echo "</div>";
}



?>         '
</div>
</body>
</html>