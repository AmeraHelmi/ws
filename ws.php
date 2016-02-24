<?php

include 'config.php';
//Select data from database
 
 
// $getData = "select * from Users";
// $qur = $connection->query($getData);
 
// while($r = mysqli_fetch_assoc($qur)){
 
// $msg[] = array("user_id " => $r['user_id'], "email" => $r['email'], "first name" => $r['first_names']);
// }
// $json = $msg;
 
// header('content-type: application/json');
// echo json_encode($json);
 
// @mysqli_close($conn);
$id=$_GET['id'];
$name = "amera";
$email = "amera.elsayed6@gmail.com";

 
$sql = "SELECT * FROM  `Users` WHERE user_id = '$id';";


$qur = $connection->query($sql);
 
if($r = mysqli_fetch_assoc($qur)){
 
$msg[] = array("name" => $r['first_names']);
}
else 
{
	$msg = array( "msg" => "Not found");
}


// if ($connection->query($sql)) {
// $msg = array( "msg" => "Your record inserted successfully");
// 	 // echo "testtt";
// } else {
// echo "Error: " . $sql . "<br>" . mysqli_error($connection);
// }
// $result=$connection->query($sql);
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// $row = mysql_fetch_row($result);
// var_dump($row);
// echo "first: ".$row[0]; // 42
// echo $row[1]; // the email value
$json = $msg;
 
header('content-type: application/json');
echo json_encode($json);
 
 
@mysqli_close($connection);
 
?>
