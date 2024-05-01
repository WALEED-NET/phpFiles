<?php
// write connection

// $conn = new mysqli("localhost", "root", "", "registerdb"); // for connection to the database


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerdb";

try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // if ($con) {
    //     echo "Sucess connection";
    // } else {
    //     echo "Falid connection";
    // }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}





// $dsn = "mysql:host=localhost;dbname=registerdb";
// $user = "root";
// $password = "";
// $option = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" // for enable arabic writing 
// );

// try {
//     $con = new PDO($dsn, $user, $password, $option);
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     include "functions.php" ;

// } catch(PDOException $e) {
//     echo $e->getMessage(); 
// }

?>