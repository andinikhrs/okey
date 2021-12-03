<html>
    <head><title>Gaji</title></head>
    <body align="center">
        <fieldset>
            <h4>Penggajian Karyawan</h4>
            <h2>PT. Selalu Makmur Jaya</h2>
            <hr style="width: 300px; margin-top: 20px;">
            <form action="" method="post">
                <center>
                    <table>
                        <tr>
                            <td>Nama Bendahara</td>
                            <td>:</td>
                            <td><input type="text" name="bendahara" id=""></td>
                        </tr>
                        <tr>
                            <td>Nama Pekerja</td>
                            <td>:</td>
                            <td><input type="text" name="pekerja" id=""></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
                            <input type="radio" name="jk" value="Perempuan">Perempuan</td>
                        </tr>
                        <tr>
                            <td>Tanggal Gaji</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal" id=""></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><select name="jabatan" id="">
                                <option value="">--- Pilih Jabatan ---</option>
                                <option value="Direktur">Direktur</option>
                                <option value="Manager">Manager</option>
                                <option value="Sekertaris">Sekertaris</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="OB">OB</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>:</td>
                            <td><select name="pendidikan" id="">
                                <option value="">--- Pendidikan Terakhir ---</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Status Pegawai</td>
                            <td>:</td>
                            <td><input type="radio" name="pegawai" value="Tetap"><b>Tetap</b>
                            <input type="radio" name="pegawai" value="Kontrak"><b>Kontrak</b></td>
                        </tr>
                        <tr>
                            <td>Lembur</td>
                            <td>:</td>
                            <td><input type="text" name="lembur" id=""> Hari / Rp. 20.000</td>
                        </tr>
                        <tr>
                            <td>Potongan BPJS</td>
                            <td>:</td>
                            <td><input type="text" name="potongan" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="kirim" value="KIRIM"></td>
                        </tr>
                    </table>
                </center>
            </form>

            <?php

if(isset($_POST['kirim'])) {
    $bendahara = $_POST['bendahara'];
    $pekerja = $_POST['pekerja'];
    $jk = $_POST['jk'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $pegawai = $_POST['pegawai'];
    $lembur = $_POST['lembur'];
    $potongan = $_POST['potongan'];

    echo "<center>";
    echo "<table style='margin-left:auto; margin-right:auto;'>";
    echo "<hr style='width: 300px; margin-top: 20px;'>";
    echo "<center><h3>Struk Gaji Karyawan</h3></center>";
    echo "<br>";
    echo "<center>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</center>";
    echo "<br>";
    echo "<p align='right'>Tanggal : <b>$tanggal</b></p>";
    echo "<br>";
    echo "<p align='left'><b><i>Gaji Pokok</i></b>";
    echo "<br>";
    echo "<br>";
    echo "Nama Karyawan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $pekerja";
    echo "<br>";
    echo "Jenis Kelamin &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : $jk";
    echo "<br>";
    echo "Pendidikan Terakhir &nbsp: $pendidikan";
    echo "<br>";
    echo "Jabatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : $jabatan";

    echo "<br>";

    if($jabatan == "Direktur"){
        $gaji = '10000000';
        echo "Gaji &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $gaji";
    }
    elseif($jabatan == "Manager"){
        $gaji = '7500000';
        echo "Gaji &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $gaji";
    }
    elseif($jabatan == "Sekertaris"){
        $gaji = '5000000';
        echo "Gaji &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $gaji";
    }
    elseif($jabatan == "Karyawan"){
        $gaji = '3000000';
        echo "Gaji &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $gaji";
    }
    elseif($jabatan == "OB"){
        $gaji = '1500000';
        echo "Gaji &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: $gaji";
    }
    else{
        echo "";
    }

    echo "<br>";
    echo "<br>";
    echo "<p align='left'><b><i>Tunjangan</i></b>";
    echo "<br>";
    echo "<br>";
    

    if($pendidikan == "SD"){
        $tunjangan = '200000';
        echo "Tunjangan Pendidikan : Rp. 200000";
    }
    elseif($pendidikan == "SMP"){
        $tunjangan = '500000';
        echo "Tunjangan Pendidikan : Rp. 500000";
    }
    elseif($pendidikan == "SMA"){
        $tunjangan = '1000000';
        echo "Tunjangan Pendidikan : Rp. 1000000";
    }
    elseif($pendidikan == "S1"){
        $tunjangan = '1500000';
        echo "Tunjangan Pendidikan : Rp. 1500000";
    }
    elseif($pendidikan == "S2"){
        $tunjangan = '2000000';
        echo "Tunjangan Pendidikan : Rp. 2000000";
    }
    else{
        echo "";
    }

    echo "<br>";
    $vl = $lembur * '20000';
    echo "Vakasi Lembur : Rp. $vl";
    echo "<br>";

    if($pegawai == "Tetap"){
        $bonus = '500000';
        echo "Bonus Status Kerja : Rp. $bonus";
    }
    elseif($pegawai == "Kontrak"){
        $bonus = '0';
        echo "Bonus Status Kerja : Rp. $bonus";
    }
    echo "<br>";
    echo "<br>";
    echo "<p align='left'><b><i>Potongan</i></b>";
    echo "<br>";
    echo "<br>";
    echo "Potongan BPJS : Rp. $potongan";
    echo "<br>";
    echo "<br>";

    $tg = ($gaji + $tunjangan + $vl + $bonus)- $potongan;
    echo "<b>Total Gaji : Rp. $tg</b>";
    echo "<br>";
    echo "<p align='right'>Bendahara : <b>$bendahara</b>";
    echo "</table>";
    echo "</center>"; }

?>

</fieldset>
</body>
</html>
