<?php
    class Phone{
        private $id;
    

        function __construct($id){
            $this->id = $id;      
        }
        function getId(){
            return $this->id;
        }        
    }
?>