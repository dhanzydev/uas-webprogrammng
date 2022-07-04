<?php
include "./connection.php";
class dosen extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function searchingData($search)
    {
        $qry = mysqli_query($this->conn, "SELECT * FROM dosen WHERE nama LIKE '%" . $search . "%'");
        if (mysqli_num_rows($qry)) {
            while ($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
        } else {
            $data = null;
            echo "<script>alert('Data Tidak Ditemukan');window.location = 'index.php?page=data-dosen'</script>";
        }
        return $data;
    }


    function displayData()
    {
        $qry = mysqli_query($this->conn, "select * from dosen");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function storeData($data)
    {
        $qry = mysqli_query($this->conn, "insert into dosen (nidn, nama, pendidikan, tgl_lahir, gender, alamat, no_hp, email) values ('" . $data['nidn'] . "','" . $data['nama_dosen'] . "','" . $data['pendidikan'] . "','" . $data['tgl_lahir'] . "','" . $data['jenis_kelamin'] . "','" . $data['alamat'] . "','" . $data['no_hp'] . "','" . $data['email'] . "')") or die(mysqli_error($this->conn));
        return $qry;
    }


    function editData($id)
    {
        $qry = mysqli_query($this->conn, "select * from dosen where nidn = '$id'");
        $data = mysqli_fetch_assoc($qry);
        return $data;
    }

    function updateData($data)
    {
        $qry = mysqli_query($this->conn, "update dosen set nama = '" . $data['nama'] . "', pendidikan = '" . $data['pendidikan'] . "', tgl_lahir = '" . $data['tgl_lahir'] . "', gender = '" . $data['jenis_kelamin'] . "', nama = '" . $data['nama'] . "', alamat = '" . $data['alamat'] . "', no_hp = '" . $data['no_hp'] . "', email = '" . $data['email'] . "' where nidn = '" . $data['nidn'] . "'") or die(mysqli_error($this->conn));
        echo $qry;
        return $qry;
    }

    function deleteData($id)
    {
        $qry = mysqli_query($this->conn, "delete from dosen where nidn = '$id'") or die(mysqli_error($this->conn));
        return $qry;
    }
}
