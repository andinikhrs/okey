<html>
    <head><title>Gaji</title></head>
    <body style="align:center">
        <fieldset style="margin:0px 420px">
            <div style="text-align:center">
                <h4>Penggajian Karyawan</h4>
                <h2>PT. Selalu Makmur Jaya</h2>
                <hr style="width: 300px; margin-top: 20px;">
            </div>
            <form action="" method="post">
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
                            <td colspan="3" style="text-align:center"><input type="submit" name="kirim" value="KIRIM"></td>
                        </tr>
                    </table>
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

    echo "<div style='padding:0px 50px'>";
    echo "<hr style='width: 300px; margin-top: 20px;'>";
    echo "<center><h3>Struk Gaji Karyawan</h3></center>";
    echo "<center>------------------------------------------</center>";
    echo "<p align='right'>Tanggal : <b>$tanggal</b></p>";
    echo "<p align='left'><b><i>Gaji Pokok</i></b>";
    echo "<table>";
    echo "<tr>";
    echo "<td> Nama Karyawan </td>";
    echo "<td> : </td>";
    echo "<td> $pekerja </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Jenis Kelamin </td>";
    echo "<td> : </td>";
    echo "<td> $jk </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir </td>";
    echo "<td> : </td>";
    echo "<td> $pendidikan </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jabatan </td>";
    echo "<td> : </td>";
    echo "<td> $jabatan </td>";
    echo "</tr>";

    if($jabatan == "Direktur"){
        $gaji = '10000000';
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td> : </td>";
        echo "<td> $gaji </td>";
        echo "</tr>";
    }
    elseif($jabatan == "Manager"){
        $gaji = '7500000';
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td> : </td>";
        echo "<td> $gaji </td>";
        echo "</tr>";
    }
    elseif($jabatan == "Sekertaris"){
        $gaji = '5000000';
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td> : </td>";
        echo "<td> $gaji </td>";
        echo "</tr>";
    }
    elseif($jabatan == "Karyawan"){
        $gaji = '3000000';
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td> : </td>";
        echo "<td> $gaji </td>";
        echo "</tr>";
    }
    elseif($jabatan == "OB"){
        $gaji = '1500000';
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td> : </td>";
        echo "<td> $gaji </td>";
        echo "</tr>";
    }
    else{
        echo "";
    }
    echo "</table>";

    echo "<br>";
    echo "<p align='left'><b><i>Tunjangan</i></b>";
    echo "<table>";
    

    if($pendidikan == "SD"){
        $tunjangan = 200000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan </td>";
        echo "<td> : </td>";
        echo "<td> $tunjangan </td>";
        echo "</tr>";
    }
    elseif($pendidikan == "SMP"){
        $tunjangan = 500000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan </td>";
        echo "<td> : </td>";
        echo "<td> $tunjangan </td>";
        echo "</tr>";
    }
    elseif($pendidikan == "SMA"){
        $tunjangan = 1000000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan </td>";
        echo "<td> : </td>";
        echo "<td> $tunjangan </td>";
        echo "</tr>";
    }
    elseif($pendidikan == "S1"){
        $tunjangan = 1500000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan </td>";
        echo "<td> : </td>";
        echo "<td> $tunjangan </td>";
        echo "</tr>";
    }
    elseif($pendidikan == "S2"){
        $tunjangan = 2000000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan </td>";
        echo "<td> : </td>";
        echo "<td> $tunjangan </td>";
        echo "</tr>";
    }
    else{
        echo "";
    }
    $vl = $lembur * $tunjangan;
    echo "<tr>";
    echo "<td>Vakasi Lembur </td>";
    echo "<td> : </td>";
    echo "<td> $vl </td>";
    echo "</tr>";

    if($pegawai == "Tetap"){
        $bonus = 500000;
        echo "<tr>";
        echo "<td>Bonus Status Kerja </td>";
        echo "<td> : </td>";
        echo "<td> $bonus </td>";
        echo "</tr>";
    }
    elseif($pegawai == "Kontrak"){
        $bonus = 0;
        echo "<tr>";
        echo "<td>Bonus Status Kerja </td>";
        echo "<td> : </td>";
        echo "<td> $bonus </td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<p align='left'><b><i>Potongan</i></b>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Potongan BPJS </td>";
    echo "<td> : </td>";
    echo "<td> $potongan </td>";
    echo "</tr>";
    echo "</table>";

    $tg = ($gaji + $tunjangan + $vl + $bonus)- $potongan;
    echo "<b>Total Gaji : Rp. $tg</b>";
    echo "<br>";
    echo "<p align='right'>Bendahara : <b>$bendahara</b>";
    echo "</table>";
    echo "</div>"; }

?>

</fieldset>
</body>
</html>