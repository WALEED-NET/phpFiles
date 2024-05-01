<?php

include "conn.php";
include "functions.php";

$username = filterRequest("name");
$email = filterRequest("email");
$password = filterRequest("password");


$stmt = $con->prepare("INSERT INTO `users` (`name`, `email` , `password`) VALUES (?, ?, ?)");
$stmt->execute(array($username, $email, $password));

$count = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}

// echo json_encode([
//     'success' => $result
// ]);