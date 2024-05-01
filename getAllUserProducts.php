<?php

include "conn.php";
include "functions.php";

$userid = filterRequest("user_id");

$stmt = $con->prepare("SELECT * FROM products Where UserID_FK = ?");

$stmt->execute(array($userid));

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count= $stmt->rowCount();

if ($count>0) {
    echo json_encode(array("status" => "success", "data" =>$data));
}else{
    echo json_encode(array("status" => "fail"));
}

