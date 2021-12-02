<html>
    <head>
        <title> soal 1 </title>
    <head>  
        <body align="center">

        <td>
            <FORM ACTION="" METHOD="POST" NAME="INPUT">
                <H2><b>SYARAT MASUK MIKO MALL</b></H2>
            Nama Anda     : <input type="text" name="nama" required><br>
            status vaksin : <select name="status_vaksin" id=""><br>
            <option value="---status vaksin---" name="---status vaksin---">---status vaksin---</option>
            <option value="sudahvaksin" name="sudahvaksin">Sudah Vaksin</option>
            <option value="belumvaksin" name="belumvaksin">Belum Vaksin</option>
            </td>
            <input type="submit" name="kirim"  value="kirim">
        </FORM>
    </body>
</html>

<?php

if (isset($_POST['kirim'])) {
    $nami = $_POST['nama'];
    $status = $_POST['status_vaksin'];

    echo "<table style='margin-left:auto; margin-right:auto;'>";
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
    
}
if ($status == "sudahvaksin"){ echo "<b> Diizinkan </b>";
} else { 
    echo "<b> Ditolak </b>";
    echo "<a href='https://www.pedulilindungi.id'>Silahkan Daftar Vaksin</a>";
}



?> 