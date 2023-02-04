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
        <h3>CRUD Project Using Ajax,Jquery,Php & Mysql</h3>
        
        <div class="row">
            <div class="column column-40">
                <input type="text" id="name" placeholder="Name">
                <input type="email" id="email" placeholder="Email">
                <input type="text" id="pass" placeholder="Pass">
                <input type="button" id="submit" value="Submit Data">
                <input type="button" id="show" class="button button-outline" value="Show Data">
            </div>
            <div class="column column-60">
                <div id="showData">
                    <table>
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Pass</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="data">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
    <script src="ajax.js"></script>
</body>
</html>