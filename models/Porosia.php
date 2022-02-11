<?php
    class porosia{
        private $id;
        private $firstName;
        private $lastName;
        private $menyra;
        private $creditCardNr;
        private $securityCode;
        private $cardExpiration;

        function __construct($id,$firstName,$lastName,$menyra,$creditCardNr,$securityCode,$cardExpiration){
            $this->id = $id;  
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->menyra = $menyra;
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
          function getMenyra(){
            return $this->menyra;
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