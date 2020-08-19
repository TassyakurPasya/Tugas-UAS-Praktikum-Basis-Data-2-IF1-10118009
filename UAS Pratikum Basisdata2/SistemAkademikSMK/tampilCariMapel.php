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
$nama_mapel = $db->escape_string($_GET["cariNamaMapel"]);

$sql = "SELECT * FROM mapel WHERE nama_mapel LIKE '%$nama_mapel%'";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

 
?>
<Table border = "2">
<tr><th colspan = "5">Data Mapel</th></tr>
<tr>
	<th>ID Mapel</th>
	<th>NIP</th>
	<th>Nama Mapel</th>
	<th>KKM</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["id_mapel"];?></td>
	<td><?php echo $barisdata["nip"];?></td>
	<td><?php echo $barisdata["nama_mapel"];?></td>
	<td><?php echo $barisdata["kkm"];?></td>
	<td><a href="editDataMapel.php?id_mapel=<?php echo $barisdata["id_mapel"]?>">Edit</a> 
        <a href="hapusDataMapel.php?id_mapel=<?php echo $barisdata["id_mapel"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
<button><a href = "TampilanUtama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataMapel.php">Klik Disini Untuk Tambah Data Mapel</a></button>
<button><a href = "TampilDataMapel.php">Kembali</a></button>
</body>
</html>