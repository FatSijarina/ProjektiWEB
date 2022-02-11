<?php 
include_once '../database/databaseConnection.php';
include_once '../repository/userRepositoryy.php';

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

    function showPorosia(){
        $conn = $this->connection->startConnection();
?>
        <table border="1" style="width:90%; margin-left:5%; margin-top:5px;">
        <?php
            $stmt = $conn->query("SELECT Emri, Mbiemri, MenyraPageses FROM porosia");
            while ($row = $stmt->fetch_row()) {
                echo "<tr><td>";
                echo($row[0]);
                echo("</td><td>");
                echo($row[1]);
                echo("</td><td>");
                echo($row[2]);
                echo("</td></tr>\n");
            }
        ?>
        </table>
<?php
    }

    function addPorosia($id,$emri,$mbiemri,$menyraPageses,$ccnr,$sc,$ce){
        $conn = $this->connection->startConnection();

        $sql = "INSERT INTO porosia VALUES ('$id','','$emri','$mbiemri','$menyraPageses','$ccnr','$sc','$ce')";
            if(mysqli_query($conn,$sql)){
                header("location:../view/dashboard.php");
            }else{
                echo "This is an Error: ".mysqli_error($conn);
            }
    }

    function removePorosiaByID($id){
        $conn = $this->connection->startConnection();

        $sql = "DELETE FROM porosia where ID = '$id'";

        if(mysqli_query($conn,$sql)){
            return "Deleted successfully !!";
        }
        else{
            return "Not deleted !!";
        }
    }

    function editArticle($idvjeter,$id,$emri,$mbiemri,$menyraPageses,$ccnr,$sc,$ce){
        $conn = $this->connection->startConnection();

        $sql = "UPDATE laptopi SET '$id','','$desc','$price' WHERE $id = '$idvjeter'";

        if(mysqli_query($conn,$sql)){
            echo "Edited!!";
        }
        else{
            echo "ERROR !!";
        }
    }
}
?>