<?php
include "koneksi.php";

class login extends database
{

    function __construct()
    {
        parent::__construct();
    }

    function login_proses($username, $password)
    {
        $qry = "select * from user where username = '$username' and password = '$password'";
        $exec = mysqli_query($this->conn, $qry);
        $data = mysqli_fetch_array($exec);

        return $data;
    }
}

$xlogin = new login();

$username = $this->conn->mysqli_real_escape_string($_POST['username']);
$password = $this->conn->mysqli_real_escape_string($_POST['password']);

$data = $xlogin->login_proses($username, $password);

if ($data) {
    session_start();
    $_SESSION['user'] = $data['nama'];
    echo "<script>alert('Login Berhail');window.location = 'index.php'</script>";
} else {
    echo "Login gagal, user tidak ditemukan";
}
