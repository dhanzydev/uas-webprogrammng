<?php
include "./connection.php";

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

$username = $_POST['username'];
$password = $_POST['password'];

$data = $xlogin->login_proses($username, $password);


if ($_GET['page'] == "login-proses") {
    if ($data == true && $data['level'] == "Admin") {
        session_start();
        echo "<script>window.location = 'index.php?page=home'</script>";
    }
}
