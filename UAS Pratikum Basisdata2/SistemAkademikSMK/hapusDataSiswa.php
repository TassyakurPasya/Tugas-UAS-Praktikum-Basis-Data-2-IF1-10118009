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
    <h1>Hapus Data Siswa</h1>
    <hr>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $no_induk_siswa  = $db->escape_string($_GET["no_induk_siswa"]);
        $sql = "DELETE FROM siswa WHERE no_induk_siswa= '$no_induk_siswa'";
        
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Data Siswa Berhasil Dihapus<br>
                <a href="tampildataSiswa.php"><button>Lihat Data Siswa</button></a>
        <?php
            } else{
    ?>
            Data Siswa Gagal Dihapus <br>
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