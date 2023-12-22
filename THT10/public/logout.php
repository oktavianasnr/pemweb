<?php
session_start();

//menghapus semua data sesi
session_unset();

//menghancurkan sesi
session_destroy();

//redirect ke halaman login setelah logout
header("Location: login.php");
exit();
?>
