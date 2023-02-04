<?php 
require_once "../database.php";
$db = new Database(); 

$Id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$pass = $_GET['pass'];
if($db->update($Id, $name, $email, $pass)){
    echo "Data updated successfully";
}else{
    echo "Update failed";
}

//echo $editId;
