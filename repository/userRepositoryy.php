<?php 
include_once '../database/databaseConnection.php';

class UserRepositoryy{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function getUserByName($name){
        $conn = $this->connection->startConnection();

        $sql = "SELECT Name FROM konsumatori WHERE name = '$name'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_column();
            
            return $result;
        }else{
            return null;
        }
    }

}
?>