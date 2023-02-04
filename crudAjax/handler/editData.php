<?php 
require_once "../database.php";
$db = new Database(); 
$editId = $_GET['id'];
$datas = $db->readOnce($editId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Google Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

     <!-- CSS Reset -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
 
     <!-- Milligram CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
     <title>Ajax with php my sql operation</title>
     <style>
        body{
            margin-top: 60px;
        }
        #showData{
            background: #eee;
            padding: 20px;
        }
        h3{
            margin-bottom: 30px;
            text-align: center;
        }
     </style>
     
</head>
<body>
<div class="container">
    <h3>User Data Update From Here</h3>
    <div class="row">
        <div class="column column-40">
            <input type="text" id="name" placeholder="Name" value="<?php echo $datas['name']; ?>">
            <input type="email" id="email" placeholder="Email" value="<?php echo $datas['email']; ?>">
            <input type="text" id="pass" placeholder="Pass" value="<?php echo $datas['pass']; ?>">
            <input type="button" onclick="updateData(<?php echo $datas['id']; ?>)" value="Update Data">
            <input type="button" onclick="backToHome()" value="Back to Home">
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script src="ajax.js"></script>
</body>
</html>