<?php

$sname = "localhost";
$uname = "root";
$pass = "";
$db_name = "bakis";

$conn = mysqli_connect($sname, $uname, $pass, $db_name);


$db = $conn;
$tableName = "orders";

if(isset($_GET['delete'])) 
{
    $id = validate($_GET['delete']);
    $condition = ['id'=>$id];
    $deleteMsg = delete_data($db, $tableName, $condition);
    header("location:listing.php");
}

function delete_data($db, $tableName, $condition) {
    $conditionData='';
    $i=0;
    foreach($condition as $index => $data) {
        $and = ($i > 0)?' AND ':'';
        $conditionData.= $and.$index." = "."'".$data."'";
        $i++;
    }
    $query = "DELETE FROM ".$tableName." WHERE ".$conditionData;
    $result= $db->query($query);
    if($result) {
        $msg="Sekmingai istrinta";
    }else {
        $msg = $db->error;
    }
    return $msg;
}

function validate($value) {
    $value = trim($value);
    $value = stripcslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

?>