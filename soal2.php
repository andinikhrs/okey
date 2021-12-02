<html>
    <head>
        <title> soal 2 </title>
    <head>  
        <body>
            <table cellspacing="4"> //klo mau bikin table, tag ini harus ada
            <tr> // tag tr berfungsi untuk membuat row, yaitu baris
                <td>Nama Bendahara</td> //tag td berfungsi menambahkan kolom, tau kolom kan?? yang ke kanan mendatar
                <td>:<td>
                <td><input type="text" name="bendahara" required></td>
            </tr>

            <tr>
                <td>Nama Pekerja</td>
                <td>:<td>
                <td><br><input type="text" name="pekerja" required></td>
            </tr>

            <tr>
                <td>Jenis Kelamin : </td>
                <td>:</td> // yang ini bikin td baru lagi, biar punya kolom masing-masing
                <td><input type="radio" name="Laki-laki" value="Laki-laki">Laki-laki  //yang inputan radio ini, td nya cuma sepasang
                <input type="radio" name="Perempuan" value="Perempuan">Perempuan</td>
            </tr>

            <tr> //ini juga tag td nya masing masing din, biar rapih dan punya kolom sendiri sendiri
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><input name="tanggal"type="date"></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><select name="jabatan" id="">
                    <option>---pilih jabatan---</option>         //di bagian yang ini aku hapus td nya, karena tag option itu udah menginduk ke tag select,
                    <option value="d">Direktur</option>             // name dari masing masing option juga dihapus, karena emang gak perlu, 
                    <option value="m">Manager</option>
                    <option value="s">Sekertaris</option>
                    <option value="o">OB</option>
                </td>
                </select>
            </tr>


</table>
    </body>
</html>
