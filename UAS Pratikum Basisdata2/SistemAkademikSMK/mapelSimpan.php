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
    <h1>Proses Penyimpanan Data Mapel</h1>
    <hr>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $id_mapel   = $_POST["id_mapel"];
        $nip        = $_POST["nip"];
        $nama_mapel = $_POST["nama_mapel"];
        $kkm        = $_POST["kkm"];
        

        $sql = "INSERT INTO mapel(id_mapel,nip,nama_mapel,kkm)
        VALUES ('$id_mapel','$nip','$nama_mapel','$kkm')";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Data Mapel Berhasil Disimpan<br>
                <a href="tampildataMapel.php"><button>Lihat Data Mapel</button></a>
        <?php
            } else{
    ?>
			   Data Mapel Gagal Disimpan <br>
			   <a href="javascript:history.back();"><button>Kembali</button></a>
    <?php
            }
    } else
        echo "Error Query : " .$db->error. "<br>";
} else
    echo "Error : " .$db->conncet_errno. "<br>";
    ?>
</body>

</html>

