<?php 
include_once '../database/databaseConnection.php';
include_once '../repository/userRepository.php';

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
        $menyra = $porosia->getMenyra();
        $creditCardNr = $porosia->getCreditCardNr();
        $securityCode = $porosia->getSecurityCode();
        $cardExp = $porosia->getCardExpiration();

        $userRepository = new UserRepository;
        $user = $userRepository->getUserByName($fName);

        if($user == $fName){
            $sql = "INSERT INTO porosia VALUES ('$id','$fName','$lName','$menyra','$creditCardNr','$securityCode','$cardExp')";
            if(mysqli_query($conn,$sql)){
                header("location:../view/buyonline.php");
            }else{
                echo "This is an Error: ".mysqli_error($conn);
            }
        }else{
            header("location:../view/LogIn.html");
        }            

    }

    function getPorosiaByID($emri){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM porosia WHERE emri = '$emri'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            
            return $result;
        }else{
            return null;
        }
    }
}
?>