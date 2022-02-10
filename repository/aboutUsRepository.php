<?php 
include_once '../database/databaseConnection.php';

class AboutUsRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function getAboutUsElement($id){
        $conn = $this->connection->startConnection();

        $sql = "SELECT Heading , Description FROM aboutus where ID = '$id'";

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