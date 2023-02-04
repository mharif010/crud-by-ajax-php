<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'ajax_crud_db';
    private $conn;

    public function __construct()
    {
        // Create connection
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);

        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function insert($name, $email, $pass)
    {
        $sql = "INSERT INTO user (name, email, pass) VALUES ('$name', '$email', '$pass')";

        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function read(){
        $sql = "SELECT * FROM user";
        $result = mysqli_query($this->conn, $sql);

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        foreach($rows as $row){
            
            echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['pass'].'</td>
            <td><button onclick="editUser('.$row['id'].')">edit</button> <button class="button button-outline" onclick="deleteUser('.$row['id'].')">delete</button></td>
            </tr>';
        }
    }
    public function readOnce($id){
        $sql = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($this->conn, $sql);
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $data;
    }

    public function update($id, $name, $email, $pass){
        $sql = "UPDATE `user` SET `name`='$name',`email`='$email',`pass`='$pass' WHERE `id` = $id";
        if(mysqli_query($this->conn, $sql)){
            return true;
        }else{
            return false;
        }
       
    }

    public function delete($userId){
        $sql = "DELETE FROM `user` WHERE id = $userId";
        if(mysqli_query($this->conn, $sql)){
            echo "Delete successfuly";
        }else{
            echo "failed ";
        }
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}




// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ajax_crud_db";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";





// $connect = mysqli_connect("localhost", "root", "", "ajax_crud_db");

// $name = $_POST['name'];
// $email = $_POST['email'];
// $pass = $_POST['pass'];

// $insert = "INSERT INTO `user` (`name`, `email`, `pass`)VALUES('$name', '$email', '$pass')";

// $query = mysqli_query($connect, $insert);

// if($query){
//     echo "data insert successfully";
// }else{
//     echo "data insert failed";
// }