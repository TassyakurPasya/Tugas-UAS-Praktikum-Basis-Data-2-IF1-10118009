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
    <h1>Edit Data Nilai</h1>
    <hr>
    <a href="tampildataNilai.php"><button>Lihat Data NIlai</button></a>
    <?php
    if (isset($_GET["id_nilai"])) {
        $db = dbConnect();
        $id_nilai = $db->escape_string($_GET["id_nilai"]);
        $dataNilai = getDataNilai($id_nilai);
        if ($dataDosen) {
    ?>
            <form action="NilaiUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>ID Nilai</td>
                        <td>:</td>
                        <td><input type="text" name="id_nilai" maxlength="15" size="15" 
                                   value="<?php echo $dataNilai["id_nilai"];?>" readonly></td>
                    </tr>

                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><input type="text" name="no_induk_siswa" maxlength="50" size="50"
                                    value="<?php echo $dataNilai["no_induk_siswa"];?>"></td>
                    </tr>

                    <tr>
                        <td>ID Mapel</td>
                        <td>:</td>
                        <td><input type="text" name="id_mapel" maxlength="60" size="60"
                        value="<?php echo $dataNilai["id_mapel"];?>"></td>
                    </tr>
                    <tr>
                        <td>Nilai</td>
                        <td>:</td>
                        <td><input type="text" name="nilai" maxlength="14" size="14"
                        value="<?php echo $dataNilai["nilai"];?>"></td>
                        
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
            echo "Data Nilai tidak diketahui";
    } else
        echo "Data Nilai Tidak ada";
    ?>
</body>
</html>