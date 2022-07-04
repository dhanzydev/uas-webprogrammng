<?php
include "./connection.php";
error_reporting(0);
class pengumuman extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function displayData()
    {
        $qry = mysqli_query($this->conn, "select * from pengumuman");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function storeData($data)
    {
        $qry = mysqli_query($this->conn, "insert into pengumuman ( judul_pengumuman, isi_pengumuman, file) values ('" . $data['judul_pengumuman'] . "','" . $data['isi_pengumuman'] . "','" . $data['file_pengumuman'] . "')") or die(mysqli_error($this->conn));
        return $qry;
    }


    function editData($id)
    {
        $qry = mysqli_query($this->conn, "select * from pengumuman where id = '$id'");
        $data = mysqli_fetch_assoc($qry);
        return $data;
    }

    function updateData($data)
    {
        if ($data["file_pengumuman"] != "") {
            $qry = mysqli_query($this->conn, "update pengumuman set judul_pengumuman = '" . $data['judul_pengumuman'] . "', isi_pengumuman = '" . $data['isi_pengumuman'] . "', file = '" . $data['file_pengumuman'] . "' where id = '" . $data['id'] . "'") or die(mysqli_error($this->conn));
            return $qry;
        } else {
            $qry = mysqli_query($this->conn, "update pengumuman set judul_pengumuman = '" . $data['judul_pengumuman'] . "', isi_pengumuman = '" . $data['isi_pengumuman'] . "' where id = '" . $data['id'] . "'") or die(mysqli_error($this->conn));
            return $qry;
        }
    }

    function deleteData($id)
    {
        $qry = mysqli_query($this->conn, "delete from pengumuman where id = '$id'") or die(mysqli_error($this->conn));
        return $qry;
    }
}
