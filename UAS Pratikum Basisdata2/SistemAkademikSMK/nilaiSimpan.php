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
    <h1>Proses Penyimpanan Data Nilai</h1>
    <hr>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $id_nilai  	         = $_POST["id_nilai"];
        $no_induk_siswa      = $_POST["no_induk_siswa"];
        $id_mapel          	 = $_POST["id_mapel"];
        $nilai               = $_POST["nilai"];
        

        $sql = "INSERT INTO nilai(id_nilai,no_induk_siswa,id_mapel,nilai)
        VALUES ('$id_nilai','$no_induk_siswa','$id_mapel','$nilai')";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Data Nilai Berhasil Disimpan <br>
                <a href="tampildataNilai.php"><button>Lihat Data Nilai</button></a>
        <?php
            } else{
    ?>
			   Data Nilai Gagal Disimpan <br>
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

