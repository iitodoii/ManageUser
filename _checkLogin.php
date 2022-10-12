<?php
try {
    include 'connector.php';
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $result = $conn->query("SELECT * from tbl_m_user_b where username='$user' and password='$pass'");
    
    if ($row = mysqli_fetch_array($result)) {
        $list = array(
            'status'=>true,
            'role'=> $row['role']
        );
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['role'] = $row['role'];

        $myJson = json_encode($list);
        echo $myJson;
    }
    else {
        $list = array(
            'status'=>false,
        );
        $myJson = json_encode($list);
        echo $myJson;
    }
}
catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
    $list = array(
        'status'=>false,
        'errmsg'=>$e->getMessage()
    );
    $myJson = json_encode($list);
    echo $myJson;
}
exit();
$mysqli->close();

?>