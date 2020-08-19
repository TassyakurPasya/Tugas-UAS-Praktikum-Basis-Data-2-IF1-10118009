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
    <h1>Ubah Data Guru</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $nip   		= $_POST["nip"];
        $nama      = $_POST["nama"];
        $ttl       = $_POST["ttl"];
        $jk       = $_POST["jk"];
        $no_tlfn    = $_POST["no_telepon"];
        $alamat 	= $_POST["alamat"];
       
        
        $sql = "UPDATE guru
        SET 
        nama='$nama',
        ttl='$ttl',
        jk='$jk',
        no_tlfn='$no_tlfn',
        alamat = '$alamat' 
        WHERE nip='$nip'";

        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Data Guru Berhasil di Update<br>
                <a href="tampildataGuru.php"><button>Melihat Data Guru</button></a>
            <?php
            } else {
            ?>
                Data Guru Gagal di Update <br>
                <a href="javascript:history.back();"><button>Kembali</button></a>
    <?php
            }
        } else
            echo "Error Query : " . $db->error . "<br>";
    } else
        echo "Error : " . $db->conncet_errno . "<br>";
    ?>
</body>
</html>