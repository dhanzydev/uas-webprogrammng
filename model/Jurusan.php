<?php
include "./connection.php";
class jurusan extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function displayData()
    {
        $qry = mysqli_query($this->conn, "select * from jurusan");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function storeData($data)
    {
        $qry = mysqli_query($this->conn, "insert into jurusan (id_jurusan, jurusan) values ('" . $data['id_jurusan'] . "','" . $data['jurusan'] . "')") or die(mysqli_error($this->conn));
        return $qry;
    }


    function editData($id)
    {
        $qry = mysqli_query($this->conn, "select * from jurusan where id_jurusan = '$id'");
        $data = mysqli_fetch_assoc($qry);
        return $data;
    }

    function updateData($data)
    {
        $qry = mysqli_query($this->conn, "update jurusan set jurusan = '" . $data['jurusan'] . "' where id_jurusan = '" . $data['id_jurusan'] . "'") or die(mysqli_error($this->conn));
        echo $qry;
        return $qry;
    }

    function deleteData($id)
    {
        $qry = mysqli_query($this->conn, "delete from jurusan where id_jurusan = '$id'") or die(mysqli_error($this->conn));
        return $qry;
    }
}
