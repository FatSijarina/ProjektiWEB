<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    $conn = mysqli_connect($servername,$username,$password);
    if(!$conn){
        echo "ERROR";
    }else{
         echo "Lidhja u realizua me sukses!";
    }


?>