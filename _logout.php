<?php
    session_start();
    header( "location: index.php" );
    unset($_SESSION['username']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['role']);
    exit();
?>
