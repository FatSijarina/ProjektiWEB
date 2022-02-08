<?php 
include_once '../database/databaseConnection.php';

class PorosiaRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertPorosia($porosia){
        $conn = $this->connection->startConnection();
       
        $id = $porosia->getId();
        $fName = $porosia->getFirstName();
        $lName = $porosia->getLastName();
        $nrTel = $porosia->getNrTel();
        $email = $porosia->getEmail();
        $address = $porosia->getAddress();
        $zip = $porosia->getZip();
        $creditCardNr = $porosia->getCreditCardNr();
        $securityCode = $porosia->getSecurityCode();
        $cardExp = $porosia->getCardExpiration();

        $sql = "INSERT INTO user VALUES ('$id','$fName','$lName','$nrTel','$email','$address','$zip','$creditCardNr','$securityCode','$cardExp')";
        if(mysqli_query($conn,$sql)){
            echo "query is executed succesfuly";
            header("location:../view/login.php");
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }


    }

    function getPorosiaByID($id){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM user WHERE id = '$id'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            
            return $result;
        }else{
            return null;
        }
    }
}
?>