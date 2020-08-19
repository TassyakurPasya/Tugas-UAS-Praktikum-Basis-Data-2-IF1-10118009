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
    <h1>Ubah Data Mapel</h1>
    <hr>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $id_mapel   = $_POST["NIK"];
        $nip      = $_POST["Nama"];
        $nama_mapel	= $_POST["Alamat"];
        $kkm   = $_POST["No_Telp"];
        
        $sql = "UPDATE mapel
        SET 
        id_mapel ='$id_mapel',
        nip = '$nip', 
        nama_mapel = '$nama_mapel',
        kkm = '$kkm'
        WHERE id_mapel='$id_mapel'";

        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Data Mapel Berhasil di Update<br>
                <a href="tampildataMapel.php"><button>Melihat Data Mapel</button></a>
            <?php
            } else {
            ?>
                Data Mapel Gagal di Update <br>
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