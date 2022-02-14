<?php 
include_once '../database/databaseConnection.php';
include_once '../models/user.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($user){
       
        $conn = $this->connection->startConnection();

        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $phone = $user ->getPhone();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $usertype = $user -> getUserType();


        $sql = "INSERT INTO useri (Name,Surname,Email,Phone,Username,Password,usertype) VALUES ('$name','$surname','$email','$phone',$username','$password','$usertype')";
        if(mysqli_query($conn,$sql)){
            header("location:../view/LogIn.php");
        }else{
            echo "This is an Error:";
        }


    }

    function getUserByUsername($username){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM useri WHERE Username = '$username'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            
            return $result;
        }else{
            return null;
        }
    }

    function deleteUser($userID){
        $conn = $this->connection->startConnection();

        $sql = "DELETE from useri where ID = '$userID'";

        if($statement = $conn->query($sql)){
            return "Deleted successfully!";
        }
        else{
            return "Not deleted!";
        }
    }

    function editUser($id1,$id,$emri,$mbiemri,$email,$phone,$username,$password){
        $conn = $this->connection->startConnection();

        $sql = "UPDATE useri SET '$name', '$surname','$username','$password' WHERE $id = $id1 ";

        if(mysqli_query($conn,$sql)){
            echo "Edited!";
        }
        else{
            echo "ERROR!";
        }
    }

    function addUser($id,$name,$surname,$email,$phone,$username,$password){
        $conn = $this->connection->startConnection();

        $sql = "INSERT INTO useri VALUES ('$id','','$name','$surname','$email','$phone','$username','$password','$usertype')";

            if(mysqli_query($conn,$sql)){
                header("location:../view/dashboard.php");
            }else{
                echo "This is an Error: ".mysqli_error($conn);
            }
    }

    function showUSers(){
        $conn = $this->connection->startConnection();
?>
        <table border="1">
        <?php
            $statement = $conn->query("SELECT Description FROM phone");
            while ($row = $statement->fetch_row()) {
                echo "<tr><td>";
                echo($row[0]);
                echo("</td></tr>\n");
            }
        ?>
        </table>
<?php
    }


}


?>