<?php
include "./connection.php";
class mahasiswa extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function searchingData($search)
    {
        $qry = mysqli_query($this->conn, "SELECT * FROM mahasiswa INNER JOIN dosen ON mahasiswa.nidn_dosen = dosen.nidn INNER JOIN jurusan ON mahasiswa.kode_jurusan = jurusan.id_jurusan WHERE nama_mhs LIKE '%" . $search . "%'");
        if (mysqli_num_rows($qry)) {
            while ($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
        } else {
            $data = null;
            echo "<script>alert('Data Tidak Ditemukan');window.location = 'index.php?page=data-mahasiswa'</script>";
        }
        return $data;
    }


    function displayData()
    {
        $qry = mysqli_query($this->conn, "SELECT * FROM mahasiswa INNER JOIN dosen ON mahasiswa.nidn_dosen = dosen.nidn INNER JOIN jurusan ON mahasiswa.kode_jurusan = jurusan.id_jurusan");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function jurusanData()
    {
        $qry = mysqli_query($this->conn, "SELECT * FROM jurusan");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function dosenData()
    {
        $qry = mysqli_query($this->conn, "SELECT * FROM dosen");
        while ($x = mysqli_fetch_assoc($qry)) {
            $data[] = $x;
        }
        return $data;
    }

    function storeData($data)
    {
        $qry = mysqli_query($this->conn, "INSERT INTO mahasiswa (nim, kode_jurusan, nidn_dosen, nama_mhs, jenis_kelamin_mhs, no_hp_mhs, alamat_mhs, tgl_lahir_mhs, email_mhs, foto) VALUES 
        ('" . $data['nim'] . "','" . $data['jurusan'] . "','" . $data['dosen_wali'] . "','" . $data['nama_mhs'] . "','" . $data['jenis_kelamin'] . "','" . $data['no_hp'] . "','" . $data['alamat'] . "','" . $data['tgl_lahir'] . "','" . $data['email'] . "','" . $data['foto'] . "')") or die(mysqli_error($this->conn));
        return $qry;
    }


    function editData($id)
    {
        $qry = mysqli_query($this->conn, "SELECT * FROM mahasiswa INNER JOIN dosen ON mahasiswa.nidn_dosen = dosen.nidn INNER JOIN jurusan ON mahasiswa.kode_jurusan = jurusan.id_jurusan WHERE nim = '$id'");
        $data = mysqli_fetch_assoc($qry);
        return $data;
    }

    function updateData($data)
    {
        if ($data['foto'] != "") {
            $qry = mysqli_query($this->conn, "update mahasiswa set kode_jurusan = '" . $data['jurusan'] . "', nidn_dosen = '" . $data['dosen_wali'] . "', nama_mhs = '" . $data['nama_mhs'] . "', jenis_kelamin_mhs = '" . $data['jenis_kelamin'] . "', no_hp_mhs = '" . $data['no_hp'] . "', alamat_mhs = '" . $data['alamat'] . "', tgl_lahir_mhs = '" . $data['tgl_lahir'] . "', email_mhs = '" . $data['email'] . "', foto = '" . $data['foto'] . "' where nim = '" . $data['nim'] . "'") or die(mysqli_error($this->conn));
            return $qry;
        } else {
            $qry = mysqli_query($this->conn, "update mahasiswa set kode_jurusan = '" . $data['jurusan'] . "', nidn_dosen = '" . $data['dosen_wali'] . "', nama_mhs = '" . $data['nama_mhs'] . "', jenis_kelamin_mhs = '" . $data['jenis_kelamin'] . "', no_hp_mhs = '" . $data['no_hp'] . "', alamat_mhs = '" . $data['alamat'] . "', tgl_lahir_mhs = '" . $data['tgl_lahir'] . "', email_mhs = '" . $data['email'] . "' where nim = '" . $data['nim'] . "'") or die(mysqli_error($this->conn));
            return $qry;
        }
    }

    function deleteData($id)
    {
        $qry = mysqli_query($this->conn, "delete from mahasiswa where nim = '$id'") or die(mysqli_error($this->conn));
        return $qry;
    }
}
