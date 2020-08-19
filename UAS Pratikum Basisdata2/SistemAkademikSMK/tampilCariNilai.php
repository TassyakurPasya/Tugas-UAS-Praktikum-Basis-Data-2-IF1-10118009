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
<?php
include_once("koneksi.php");
$db = dbConnect();
$nama = $db->escape_string($_GET["cariIdNilai"]);

$sql = "SELECT * FROM nilai WHERE id_nilai LIKE '%$id_nilai%'";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

 
?>
<Table border = "2">
<tr><th colspan = "5">Data Nilai</th></tr>
<tr>
	<th>ID Nilai</th>
	<th>NIS</th>
	<th>ID Mapel</th>
	<th>Nilai</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["id_nilai"];?></td>
	<td><?php echo $barisdata["no_induk_siswa"];?></td>
	<td><?php echo $barisdata["id_nilai"];?></td>
	<td><?php echo $barisdata["nilai"];?></td>
	<td><a href="editDataNilai.php?id_nilai=<?php echo $barisdata["id_nilai"]?>">Edit</a> 
        <a href="hapusDataNilai.php?id_nilai=<?php echo $barisdata["id_nilai"]?>">Hapus</a>
    </td>
</tr>
</table>
<button><a href = "TampilanUtama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataNilai.php">Klik Disini Untuk Tambah Data Nilai</a></button>
<button><a href = "TampilDataNilai.php">Kembali</a></button>
</body>
</html>