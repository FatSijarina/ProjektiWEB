<?php 
  class User{
      private $id;
      private $name;
      private $surname;
      private $email;
      private $phone;
      private $username;
      private $password;
      private $usertype;
  

      function __construct($id,$name,$surname,$email, $phone,$username,$password,$usertype){
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;    
        $this->email = $email;
        $this->phone = $phone;
        $this->username = $username;
        $this->password=$password;
        $this->usertype=$usertype;
      }

      function getId(){
        return $this->id;
      }
      function getName(){
          return $this->name;
      }
      function getSurname(){
        return $this->surname;
      }
      function getEmail(){
        return $this->email;
      }
      function getPhone(){
          return $this->phone;
      }
      function getPassword(){
        return $this->password;
      }
  
      function getUsername(){
        return $this->username;
      }

      function getUserType(){
        return $this->usertype;
      }

      function __toString(){
        return "User: ".$this->name." - ".$this->surname." - ".$this->username;
      }
  }
?>
