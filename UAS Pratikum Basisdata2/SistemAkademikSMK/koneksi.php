<?php
function dbConnect(){
	$db = new mysqli("localhost:3306","root","pasya1234","10118009_akademik");
	return $db;
}
function getDataGuru($nip)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM guru WHERE nip='$nip'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
function getDataMapel($Id_mapel)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM mapel WHERE id_mapel='$Id_mapel'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
function getDataNilai($id_nilai)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM nilai WHERE id_nilai = '$id_nilai'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
function getDataSiswa($nip)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM siswa WHERE no_induk_siswa='$no_induk_siswa'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
?>