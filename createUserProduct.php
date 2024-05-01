<?php

include "conn.php";
include "functions.php";


$name = filterRequest('name');
$description = filterRequest('description');
// $price = filterRequest('price');
$userID_FK = filterRequest('userID_FK');

// $image =  filterRequest('image');

// if ($image != "fail") {
$stmt = $con->prepare("INSERT INTO `products` (`name`,`description`,`UserID_FK`) VALUES (?, ?,  ?)");
$result = $stmt->execute([$name, $description, $userID_FK]);

$count = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}







// ------------
// header('Content-Type: application/json');
// include "../db.php";

// $name = $_POST['product_name'];
// $description =  $_POST['product_description'];
// $image =  $_POST['product_image'];
// $price = (int) $_POST['product_price'];
// $user_product = (int) $_POST['user_product'];

// $stmt = $db->prepare("INSERT INTO Product (product_name, product_description, product_image, product_price, user_product) VALUES (?, ?, ?, ?, ?)");
// $result = $stmt->execute([$name, $description, $image, $price, $user_product]);

// echo json_encode([
//     'success' => $result
// ]);
?>