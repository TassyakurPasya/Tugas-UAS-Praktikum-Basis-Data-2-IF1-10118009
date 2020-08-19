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
    <h1>Edit Data Siswa</h1>
    <hr>
    <a href="tampildataSiswa.php"><button>Lihat Data Siswa</button></a>
    <?php
    if (isset($_GET["no_induk_siswa"])) {
        $db = dbConnect();
        $no_induk_siswa = $db->escape_string($_GET["no_induk_siswa"]);
        $dataSiswa = getDataSiswa($no_induk_siswa);
        if ($dataSiswa) {
    ?>
            <form action="siswaUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><input type="text" name="no_induk_siswa" maxlength="15" size="15" 
                                   value="<?php echo $dataSiswa["no_induk_siswa"];?>" readonly></td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td><input type="text" name="nama" maxlength="50" size="50"
                                    value="<?php echo $dataSiswa["nama"];?>"></td>
                    </tr>
                    <tr>
                        <td>TTL</td>
                        <td>:</td>
                        <td><input type="text" name="ttl" maxlength="50" size="50"
                                    value="<?php echo $dataSiswa["ttl"];?>"></td>
                    </tr>
                    <tr>
                        <td>JK</td>
                        <td>:</td>
                        <td><input type="text" name="jk" maxlength="50" size="50"
                                    value="<?php echo $dataSiswa["jk"];?>"></td>
                    </tr>
                    <tr>
                        <td>NO Telepon</td>
                        <td>:</td>
                        <td><input type="text" name="no_tlfn" id="" maxlength="14" size="14"
                        value="<?php echo $dataSiswa["no_tlfn"];?>"></td>
                        
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" maxlength="60" size="60"
                        value="<?php echo $dataSiswa["alamat"];?>"></td>
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
            echo "Data Siswa tidak diketahui";
    } else
        echo "Data Siswa Tidak ada";
    ?>
</body>
</html>