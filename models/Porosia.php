<?php
    class porosia{
        private $id;
        private $firstName;
        private $lastName;
        private $nrTel;
        private $email;
        private $address;
        private $zip;
        private $creditCardNr;
        private $securityCode;
        private $cardExpiration;

        function __construct($id,$firstName,$lastName,$nrTel,$email,$address,$zip,$creditCardNr,$securityCode,$cardExpiration){
            $this->id = $id;  
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->nrTel = $nrTel;
            $this->email = $email;
            $this->address = $address;
            $this->zip = $zip;
            $this->creditCardNr = $creditCardNr;
            $this->securityCode = $securityCode;
            $this->cardExpiration = $cardExpiration;
        }

          function getId(){
            return $this->id;
          }
          function getFirstName(){
            return $this->firstName;
          }
          function getLastName(){
              return $this->lastName;
          }
          function getNrTel(){
            return $this->nrTel;
          }
          function getEmail(){
            return $this->email;
          }
          function getAddress(){
              return $this->address;
          }
          function getZip(){
              return $this->zip;
          }
          function getCreditCardNr(){
            return $this->creditCardNr;
          }
          function getSecurityCode(){
            return $this->securityCode;
          }
          function getCardExpiration(){
            return $this->cardExpiration;
          }
    }
?>