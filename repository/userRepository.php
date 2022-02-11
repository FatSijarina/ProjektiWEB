<?php 
include_once '../database/dbconnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($user){
       
        $conn = $this->connection->startConnection();
       

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $phone = $user ->getPhone();
        $username = $user->getUsername();
        $password = $user->getPassword();
        echo "<br>";
        echo " ID: $id";
        echo " name: $name";
        echo " surname: $surname";
        echo " email: $email";
        echo " phone number: $phone"
        echo " username: $username";
        echo " password: $password";
        echo "<br>";


        $sql = "INSERT INTO users (Id,Name,Surname,Email,Username,Password) VALUES ('$id','$name','$surname','$email','$username','$password')";
        if(mysqli_query($conn,$sql)){
            echo "Query is executed succesfully";
            header("location:../view/LogIn.php");
        }else{
            echo "Error: ".mysqli_error($conn);
        }


    }

    function getUserByUsername($username,$password){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM lokali WHERE Username = '$username' and Password = '$password'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            
            return $result;
        }else{
            return null;
        }
    }

    function deleteUser($userID){
        $conn = $this->connection->startConnection();

        $sql = "Delete from lokali where ID = '$userID'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();

            return $result;
        }
        else{
            return null;
        }
    }

    function edit($id,$fullname){
        $conn = $this->connection->startConnection();

        $sql = "update lokali set fullname = '$fullname' where ID ='$id'";
    }

}


?>