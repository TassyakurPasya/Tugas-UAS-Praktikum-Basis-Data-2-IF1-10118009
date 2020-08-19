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
    <h1>Edit Data Mapel</h1>
    <hr>
    <a href="tampildataMapel.php"><button>Lihat Data Mapel</button></a>
    <?php
    if (isset($_GET["id_mapel"])) {
        $db = dbConnect();
        $id_mapel = $db->escape_string($_GET["id_mapel"]);
        $dataMapel = getDataMapel($id_mapel);
        if ($dataMapel) {
    ?>
            <form action="mapelUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>ID Mapel</td>
                        <td>:</td>
                        <td><input type="text" name="id_mapel" maxlength="15" size="15" 
                                   value="<?php echo $dataMapel["id_mapel"];?>" readonly></td>
                    </tr>

                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><input type="text" name="nip" maxlength="50" size="50"
                                    value="<?php echo $dataMapel["nip"];?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Mapel</td>
                        <td>:</td>
                        <td><input type="text" name="nama_mapel" maxlength="50" size="50"
                                    value="<?php echo $dataMapel["nip"];?>"></td>
                    </tr>
                    <tr>
                        <td>KKM</td>
                        <td>:</td>
                        <td><input type="text" name="kkm" maxlength="60" size="60"
                        value="<?php echo $dataMapel["kkm"];?>"></td>
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
            echo "Data Mapel tidak diketahui";
    } else
        echo "Data Tidak ada";
    ?>
</body>
</html>