<html>
<head></head>
<h1><center>TAMPIL DATA NILAI</center></h1>
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

$sql = "SELECT * FROM nilai";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<form method = "GET" action = "tampilCariNilai.php">
<input type = "text" name = "cariIdNilai" size = "30" maxlength = "30">
<input type = "submit" value = "CARI">
</form>

<Table border = "2">
<tr><th colspan = "5">Data Nilai</th></tr>
<tr>
	<th>ID Nilai</th>
	<th>NIS</th>
	<th>ID Mapel</th>
	<th>NIlai</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["id_nilai"];?></td>
	<td><?php echo $barisdata["no_induk_siswa"];?></td>
	<td><?php echo $barisdata["id_mapel"];?></td>
	<td><?php echo $barisdata["nilai"];?></td>
	<td><a href="editDataNilai.php?nip=<?php echo $barisdata["id_nilai"]?>">Edit</a> 
        <a href="hapusDataNilai.php?nip=<?php echo $barisdata["id_nilai"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
<p>
<button><a href = "TampilanUtama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataNilai.php">Klik Ini Untuk Menambah Data Nilai</a></button>
</p>
</body>
</html>