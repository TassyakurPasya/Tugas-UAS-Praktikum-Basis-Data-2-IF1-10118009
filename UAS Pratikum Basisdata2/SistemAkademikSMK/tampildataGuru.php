<html>
<head></head>
<h1><center>TAMPIL DATA GURU</center></h1>
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

$sql = "SELECT * FROM guru";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<form method = "GET" action = "tampilCariGuru.php">
<input type = "text" name = "cariNamaGuru" size = "30" maxlength = "30">
<input type = "submit" value = "CARI">
</form>

<Table border = "2">
<tr><th colspan = "5">Data Guru</th></tr>
<tr>
	<th>NIP</th>
	<th>Nama</th>
	<th>TTL</th>
	<th>Jenis Kelamin</th>
	<th>NO Telepon</th>
	<th>Alamat</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["nip"];?></td>
	<td><?php echo $barisdata["nama"];?></td>
	<td><?php echo $barisdata["ttl"];?></td>
	<td><?php echo $barisdata["jk"];?></td>
	<td><?php echo $barisdata["no_tlfn"];?></td>
	<td><?php echo $barisdata["alamat"];?></td>
	<td><a href="editDataGuru.php?nip=<?php echo $barisdata["nip"]?>">Edit</a> 
        <a href="hapusDataGuru.php?nip=<?php echo $barisdata["nip"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
<p>
<button><a href = "TampilanUtama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataGuru.php">Klik Ini Untuk Menambah Data Guru</a></button>
</p>
</body>
</html>