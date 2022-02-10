<?php 
include_once '../repository/userRepository.php';

if(isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "Fill all required fields!";
    }else{
      $username = $_POST['username'];
      $password = $_POST['password'];

     // echo $username;
      //echo $password;
      $userRepository = new UserRepository;
      $user = $userRepository->getUserByUsername($username,$password);
  
      if(empty($user)){
        echo "Username or Password is Incorrect!";
        
      }else{
        header("location:../view/index.php"); 
      }


    }
}

?>