<?php
    include 'connector.php';
    session_start();
    $id = $_POST['edw_id'];
    $status = $_POST['edw_status'];
    $amount = $_POST['edw_amount'];
    if($status=='ถอน')
        $amount *= -1;

    $result = $conn->query("UPDATE `tbl_t_statement` SET `amount`='$amount',`timestamp`=now() WHERE id='$id'");

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
