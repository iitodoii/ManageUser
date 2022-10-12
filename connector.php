<?php
    // $conn = mysqli_connect('localhost', 'iitodoii', 'Thuntubb8!', 'wubmgf');
    $conn = new mysqli("184.168.96.211:3306", "root_999", "sheepcow", "mydb");
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }
?>