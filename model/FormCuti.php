<?php
include "./connection.php";
class formcuti extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function displayData()
    {
        $qry = mysqli_query($this->conn, "select * from form_cuti");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function storeData($data)
    {
        $qry = mysqli_query($this->conn, "insert into form_cuti (nama, nim, fakultas, program_studi, no_hp, tahun_akademik, status) values ('" . $data['nama'] . "','" . $data['nim'] . "','" . $data['fakultas'] . "','" . $data['program_studi'] . "','" . $data['no_hp'] . "','" . $data['tahun_akademik'] . "', 'Menunggu Persetujuan')") or die(mysqli_error($this->conn));
        return $qry;
    }

    function updateData($data)
    {
        $qry = mysqli_query($this->conn, "update form_cuti set status = '" . $data['status'] . "' WHERE id = '" . $data['id'] . "'") or die(mysqli_error($this->conn));
        print_r($qry);
        return $qry;
    }

    function print($id)
    {
        $qry = mysqli_query($this->conn, "select * from form_cuti where id = '$id'");
        $data = mysqli_fetch_assoc($qry);
        return $data;
    }
}
