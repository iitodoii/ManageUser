<?php
    include 'connector.php';
    session_start();
    $id = $_POST['id'];
    $result = $conn->query("DELETE FROM `tbl_t_statement` WHERE id='$id'");
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
