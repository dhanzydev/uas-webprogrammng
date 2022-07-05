<?php
include "./connection.php";
class formsakitdispensasi extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function displayData()
    {
        $qry = mysqli_query($this->conn, "SELECT DISTINCT nama, program_studi, alamat, alasan FROM form_sakit_dispensasi");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function storeData($data, $total)
    {
        $matakuliah = $data['nama_matakuliah'];
        $kelas = $data['kelas'];
        $tanggal = $data['tanggal'];
        $pertemuan = $data['pertemuan'];

        for ($i = 0; $i < $total; $i++) {
            $qry = mysqli_query($this->conn, "insert into form_sakit_dispensasi (nama, program_studi, alamat, no_telp, matakuliah, kelas, tanggal, pertemuan, alasan) values 
            ('" . $data['nama'] . "','" . $data['program_studi'] . "','" . $data['alamat'] . "','" . $data['no_hp'] . "','" . $matakuliah[$i] . "','" . $kelas[$i] . "','" . $tanggal[$i] . "','" . $pertemuan[$i] . "','" . $data['alasan'] . "')") or die(mysqli_error($this->conn));
        }
        return $qry;
    }

    function print($id)
    {
        $qry = mysqli_query($this->conn, "select * from form_cuti where id = '$id'");
        $data = mysqli_fetch_assoc($qry);
        return $data;
    }
}
