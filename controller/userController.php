<?php 
include_once '../repository/userRepository.php';

if(isset($_POST['continue'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['number']) || empty($_POST['email']) ||
        empty($_POST['address']) || empty($_POST['zip'])){
        echo "Fill all required fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $zip = $_POST['zip'];


      
        $userRepository = new UserRepository;
        //$userRepository->insertUser($user);
        $user = $userRepository->getUserByName($name);


        //header("location:../view/buyonline2.php"); 
        /*if(empty($user)){
            echo "Username or Password is Incorrect!";
        }else{*/
            //print_r($user);
            if($user == $name){
                header("location:../view/buyonline2.php"); 
            }else{
                header("location:../view/LogIn.html"); 
            }
    }
}

?>