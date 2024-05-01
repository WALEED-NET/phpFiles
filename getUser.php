<?php

// Include the database connection file
include "conn.php";

// Check if the 'name' key exists in the POST array to avoid undefined index notices
if (!isset($_POST["name"])) {
    echo json_encode(array("status" => "fail", "message" => "Name is required"));
    exit();
}

// Sanitize the input
$name = htmlspecialchars(strip_tags($_POST["name"]));

// Prepare the SQL statement
$stmt = $con->prepare("SELECT * FROM Users WHERE name = ?");

// Execute the statement with the name parameter
$stmt->execute(array($name));

// Fetch all the matching rows
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Check if any rows were returned
if ($stmt->rowCount() > 0) {
    // If so, return a success status and the user data
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    // If not, return a fail status
    echo json_encode(array("status" => "fail", "message" => "No user found with the provided name"));
}



// $password =htmlspecialchars(strip_tags($_POST["password"]));

?>