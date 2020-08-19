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
<?php
include_once("koneksi.php");
?>
<body>
    <h1>Edit Data Guru</h1>
    <hr>
    <a href="tampildataGuru.php"></a>
    <?php
    if (isset($_GET["nip"])) {
        $db = dbConnect();
        $nip = $db->escape_string($_GET["nip"]);
        $dataGuru = getDataGuru($nip);
        if ($dataGuru) {
    ?>
            <form action="guruUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><input type="text" name="nip" maxlength="15" size="10" 
                                   value="<?php echo $dataGuru["nip"];?>" readonly></td>
                    </tr>

                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td><input type="text" name="nama" maxlength="50" size="50"
                                    value="<?php echo $dataGuru["nama"];?>"></td>
                    </tr>
                    <tr>
                        <td>TTL</td>
                        <td>:</td>
                        <td><input type="text" name="ttl" maxlength="50" size="50"
                                    value="<?php echo $dataGuru["ttl"];?>"></td>
                    </tr>
                    <tr>
                        <td>JK</td>
                        <td>:</td>
                        <td><input type="text" name="jk" maxlength="50" size="50"
                                    value="<?php echo $dataGuru["jk"];?>"></td>
                    </tr>
                    <tr>
                        <td>NO TELEPON</td>
                        <td>:</td>
                        <td><input type="text" name="no_telepon" id="" maxlength="14" size="14"
                        value="<?php echo $dataGuru["no_tlfn"];?>"></td>
                        
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" maxlength="60" size="60"
                        value="<?php echo $dataGuru["alamat"];?>"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" value="Simpan" name="TblUpdate">
                        <input type="reset" value="Reset"></td>

                    </tr>
                </table>
            </form>
    <?php
        } else
            echo "Data guru tidak diketahui";
    } else
        echo "Data Tidak ada";
    ?>
</body>
</html>