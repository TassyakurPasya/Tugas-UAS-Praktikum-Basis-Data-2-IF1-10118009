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
    <h1>Hapus Data Nilai</h1>
    <hr>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $id_nilai   = $db->escape_string($_GET["id_nilai"]);
        $sql = "DELETE FROM nilai WHERE id_nilai= '$id_nilai'";
    
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Data Nilai Berhasil Dihapus <br>
                <a href="tampildataNilai.php"><button>Lihat Data Nilai</button></a>
        <?php
            } else{
    ?>
            Data Nilai Gagal Dihapus <br>
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