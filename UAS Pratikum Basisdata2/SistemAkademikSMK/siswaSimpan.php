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
    <h1>Proses Penyimpanan Data Siswa</h1>
    <hr>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $no_induk_siswa = $_POST["no_induk_siswa"];
        $nama           = $_POST["nama"];
        $ttl            = $_POST["ttl"];
        $jk             = $_POST["jk"];
        $no_tlfn        = $_POST["no_tlfn"];
        $alamat	 	    = $_POST["alamat"];

        $sql = "INSERT INTO siswa(no_induk_siswa,nama,ttl,jk,no_tlfn,alamat)
        VALUES ('$no_induk_siswa','$nama','$ttl','$jk','$no_tlfn','$alamat')";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Data Siswa Berhasil Disimpan <br>
                <a href="tampildataSiswa.php"><button>Lihat Data Siswa</button></a>
        <?php
            } else{
    ?>
			   Data Gagal Disimpan<br>
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

