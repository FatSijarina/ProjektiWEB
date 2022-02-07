<?php
    class porosia{
        private $mnyra;
        private $firstName;
        private $lastName;
        private $creditCardNr;
        private $securityCode;
        private $cardExpiration;

        function __construct($mnyra,$firstName,$lastName,$creditCardNr,$securityCode,$cardExpiration){
            $this->mnyra = $mnyra;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->creditCardNr = $creditCardNr;
            $this->securityCode = $securityCode;
            $this->cardExpiration = $cardExpiration;
        }

        function getFirstName(){
            return $this->firstName;
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
          function getPassword(){
            return $this->password;
          }
          function getUsername(){
            return $this->username;
          }
    }
?>