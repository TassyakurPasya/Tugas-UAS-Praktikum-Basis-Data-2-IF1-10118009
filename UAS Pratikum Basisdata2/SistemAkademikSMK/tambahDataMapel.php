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
    <h1>Tambah Data Mapel</h1>
    <hr>
    <a href="tampildataMapel.php"></a>
    <form action="mapelSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>ID Mapel</td>
                <td>:</td>
                <td><input type="text" name="id_mapel" maxlength="15" size="15"></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" maxlength="15" size="15"></td>
            </tr>

            <tr>
                <td>Nama Mapel</td>
                <td>:</td>
                <td><input type="text" name="nama_mapel" maxlength="15" size="15"></td>
            </tr>
            <tr>
                <td>KKM</td>
                <td>:</td>
                <td><input type="text" name="kkm"  maxlength="15" size="15"></td>
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