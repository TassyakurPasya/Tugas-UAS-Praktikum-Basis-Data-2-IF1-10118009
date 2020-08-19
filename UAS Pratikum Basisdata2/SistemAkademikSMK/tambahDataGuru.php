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
    <h1>Tambah Data Guru</h1>
    <hr>
    <a href="tampildataGuru.php"></a>
    <form action="guruSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" maxlength="15" size="15"></td>
            </tr>

            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" name="nama" maxlength="50" size="50"></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td>:</td>
                <td><input type="text" name="ttl" maxlength="50" size="50"></td>
            </tr>
            <tr>
                <td>JK</td>
                <td>:</td>
                <td><input type="text" name="jk" maxlength="50" size="50"></td>
            </tr>
             <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_tlfn" id="" maxlength="14" size="14"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type="text" name="alamat" maxlength="60" size="60"></td>
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