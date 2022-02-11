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

    function removeArticleByID($id){
        $conn = $this->connection->startConnection();

        $sql = "DELETE FROM laptopi where ID = '$id'";

        if(mysqli_query($conn,$sql)){
            return "Deleted successfully !!";
        }
        else{
            return "Not deleted !!";
        }
    }

    function showArticle(){
        $conn = $this->connection->startConnection();
?>
        <table border="1">
        <?php
            $stmt = $conn->query("SELECT Description FROM laptopi");
            while ($row = $stmt->fetch_row()) {
                echo "<tr><td>";
                echo($row[0]);
                echo("</td></tr>\n");
            }
        ?>
        </table>
<?php
    }

    function addArticle($id, $desc, $price){
        $conn = $this->connection->startConnection();

        $sql = "INSERT INTO laptopi VALUES ('$id','','$desc','$price')";
            if(mysqli_query($conn,$sql)){
                header("location:../view/dashboard.php");
            }else{
                echo "This is an Error: ".mysqli_error($conn);
            }
    }

    function editArticle($idvjeter,$id, $desc, $price){
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