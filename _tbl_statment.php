<?php 
include 'connector.php';
$id = $_POST['id'];
$sql = "SELECT * FROM `tbl_t_statement` where user_id='$id'";
$result = $conn->query($sql);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows['data'][] = $r;
}
echo json_encode($rows);
// $output['data'][] = array(
//     'id' => '1',
//     'status' => 'ฝาก',
//     'amount' => '3',
// );
// echo json_encode($output);
?>
