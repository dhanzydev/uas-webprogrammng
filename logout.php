<?php

session_start();

session_destroy();
echo "<script>alert('logout Berhail');window.location = 'login.php'</script>";
