<?php 
include_once '../database/databaseConnection.php';

class LaptopRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function getArticleByID($id){
        $conn = $this->connection->startConnection();

        $sql = "SELECT IMG, Description, Price FROM laptopi where ID = '$id'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_row()) {
                return $row;
            }
        } else {
            //echo "0 results";
        }
    }
}
?>