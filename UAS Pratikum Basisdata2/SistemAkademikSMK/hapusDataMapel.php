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
    <h1>Hapus Data Mapel</h1>
    <hr>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $id_mapel  = $_GET["id_mapel"];
        $sql = "DELETE FROM mapel WHERE id_mapel= '$id_mapel'";
        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Data Mapel Berhasil dihapus <br>
                <a href="tampildataMapel.php"><button>Lihat Data Mapel</button></a>
        <?php
            } else{
    ?>
            Hapus Data Gagal <br>
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