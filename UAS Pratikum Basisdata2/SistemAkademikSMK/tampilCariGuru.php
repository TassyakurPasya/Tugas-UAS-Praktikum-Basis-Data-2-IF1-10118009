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
$nama = $db->escape_string($_GET["cariNamaGuru"]);

$sql = "SELECT * FROM guru WHERE nama LIKE '%$nama%'";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

 
?>
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
<button><a href = "TampilanUtama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataGuru.php">Klik Disini Untuk Tambah Data Guru</a></button>
<button><a href = "TampilDataGuru.php">Kembali</a></button>
</body>
</html>