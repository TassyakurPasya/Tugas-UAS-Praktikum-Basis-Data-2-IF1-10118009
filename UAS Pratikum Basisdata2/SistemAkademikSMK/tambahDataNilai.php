<html>
<style type="text/css">
    table,th,tr{
        border: 10px solid blue;

    }
    table{
        table-collapse: table-collapse;
    }
    table{
        font-weight: 10px;
    }
</style>
<body>
    <h1>TAMBAH DATA NILAI</h1>
    <hr>
    <a href="tampildataNilai.php"></a>
    <form action="nilaiSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>ID Nilai</td>
                <td>:</td>
                <td><input type="text" name="id_nilai" maxlength="15" size="15"></td>
            </tr>

            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="no_induk_siswa" maxlength="50" size="50"></td>
            </tr>

            <tr>
                <td>ID Mapel</td>
                <td>:</td>
                <td><input type="text" name="id_mapel" maxlength="60" size="60"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>:</td>
                <td><input type="text" name="nilai" id="" maxlength="14" size="14"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" value="Simpan" name="TblSimpan"></td>

            </tr>
        </table>
    </form>
</body>	
</html>