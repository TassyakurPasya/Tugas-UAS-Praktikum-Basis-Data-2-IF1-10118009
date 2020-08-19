<html>
<head></head>
<h1><center>TAMPIL DATA MAPEL</center></h1>
<hr>
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

$sql = "SELECT * FROM mapel";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<form method = "GET" action = "tampilCariMapel.php">
<input type = "text" name = "cariNamaMapel" size = "30" maxlength = "30">
<input type = "submit" value = "CARI">
</form>

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
	<td><a href="editDataMapel.php?nip=<?php echo $barisdata["id_mapel"]?>">Edit</a> 
        <a href="hapusDataMapel.php?nip=<?php echo $barisdata["id_mapel"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
<p>
<button><a href = "TampilanUtama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataMapel.php">Klik Ini Untuk Menambah Data Mapel</a></button>
</p>
</body>
</html>