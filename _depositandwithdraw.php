<?php
    include 'connector.php';
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $user_id = $_POST['dw_id'];
    $status = $_POST['dw_status'];
    $amount = $_POST['dw_amount'];
    $createDate = date("Y-m-d H:i");
    if($status=='ถอน')
        $amount *= -1;

    $result = $conn->query("INSERT INTO `tbl_t_statement`(`status`, `amount`, `user_id`, `timestamp`)  
    VALUES ('$status','$amount','$user_id','$createDate')");

    if($conn->affected_rows!=null)
    {
        $list = array(
            'status'=>$conn->affected_rows
        );
        $myJson = json_encode($list);
        echo $myJson;
        
    }
    else
    {
        $list = array(
            'status'=>false
        );
        $myJson = json_encode($list);
    }
    exit();
?>
