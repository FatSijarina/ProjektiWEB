<?php 
  class User{
      private $id;
      private $name;
      private $surname;
      private $email;
      private $phone;
      private $password;
      private $username;

      function __construct($id,$name,$surname,$username,$email,$phone,$password){
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
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

      function __toString(){
        return "User: ".$this->name." - ".$this->surname." - ".$this->username;
      }
  }
?>