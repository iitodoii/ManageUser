<?php
    include 'connector.php';
    session_start();
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $account = $_POST['account_no'];
    $account_name = "";
    
    
    if(isset($_POST['other']))
    {
        $account_name = $_POST['account_name_other']; 
    }
    else
    {
        $account_name = $_POST['account_name'];
    }

    $result = $conn->query("INSERT INTO `tbl_t_user`(`username`, `name`, `lastname`, `phone_number`, `account_number`, `account_name`)  
    VALUES ('$username','$firstname','$lastname','$phone','$account','$account_name')");

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
