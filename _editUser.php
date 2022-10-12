<?php
    include 'connector.php';
    session_start();
    $id=$_POST['e_id'];
    $username = $_POST['e_username'];
    $firstname = $_POST['e_firstname'];
    $lastname = $_POST['e_lastname'];
    $phone = $_POST['e_phone'];
    $account = $_POST['e_account_no'];
    $account_name = "";
        
    if(isset($_POST['e_other']))
    {
        $account_name = $_POST['e_account_name_other']; 
    }
    else
    {
        $account_name = $_POST['e_account_name'];
    }

    $result = $conn->query("UPDATE `tbl_t_user` SET `username`='$username',`name`='$firstname',`lastname`='$lastname',`phone_number`='$phone',
    `account_number`='$account',`account_name`='$account_name' WHERE id = '$id'");

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