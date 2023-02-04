<?php 
require_once "../database.php";
$db = new Database();

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if ($db->insert( $name, $email,$pass )) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($db->conn);
}
