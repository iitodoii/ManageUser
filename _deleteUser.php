<?php
include 'connector.php';
session_start();
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $result = $conn->query("DELETE FROM `tbl_t_user` WHERE id='$id'");
    if ($conn->affected_rows != null) {
        $resultStatement = $conn->query("DELETE FROM `tbl_t_statement` WHERE user_id='$id'");
        if ($conn->affected_rows != null) {
            $list = array(
                'status' => $conn->affected_rows
            );
            $myJson = json_encode($list);
            echo $myJson;
        } else {
            echo 'false';
        }
    } else {
        echo 'false';
    }

    exit();
} else {
    echo 'delete error!';
}
