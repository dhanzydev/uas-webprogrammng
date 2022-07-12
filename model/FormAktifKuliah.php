<?php
include "./connection.php";
error_reporting(E_ALL);
class formaktifkuliah extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function displayData()
    {
        $qry = mysqli_query($this->conn, "select * from form_aktif_kuliah");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function storeData($data)
    {
        $qry = mysqli_query($this->conn, "insert into form_aktif_kuliah (program_studi, nim, nama, tempat_lahir, tgl_lahir, alamat, no_hp, semester, tahun_ajaran, alasan) values ('" . $data['program_studi'] . "','" . $data['nim'] . "','" . $data['nama'] . "','" . $data['tempat_lahir'] . "','" . $data['tgl_lahir'] . "','" . $data['alamat'] . "','" . $data['no_hp'] . "','" . $data['semester'] . "','" . $data['tahun_ajaran'] . "','" . $data['alasan'] . "')") or die(mysqli_error($this->conn));
        return $qry;
    }

    function updateData($data)
    {
        $qry = mysqli_query($this->conn, "update form_aktif_kuliah set status = '" . $data['status'] . "' WHERE id = '" . $data['id'] . "'") or die(mysqli_error($this->conn));
        print_r($qry);
        return $qry;
    }

    function print($id)
    {
        $qry = mysqli_query($this->conn, "select * from form_aktif_kuliah where id = '$id'");
        $data = mysqli_fetch_assoc($qry);
        return $data;
    }
}
