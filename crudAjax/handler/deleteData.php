<?php 
require_once "../database.php";
$db = new Database();
$getId = $_POST['id'];
$db->delete($getId);
