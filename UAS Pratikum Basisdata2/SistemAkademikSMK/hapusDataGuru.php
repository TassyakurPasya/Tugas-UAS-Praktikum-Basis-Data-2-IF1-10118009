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
    <h1>Hapus Data Guru</h1>
    <hr>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $nip   = $_GET["nip"];
        $sql ="DELETE FROM guru WHERE nip='$nip'";
    
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Data Berhasil Dihapus <br>
                <a href="tampildataGuru.php"><button>Lihat Data Guru</button></a>
        <?php
            } else{
    ?>
            Data Gagal Dihapus<br>
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