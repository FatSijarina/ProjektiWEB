<?php 
include_once '../repository/phoneRepository.php';
include_once '../models//phone.php';

  

    if(isset($_POST['submitBtn'])){
      if(empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['ccNr']) || empty($_POST['cvc']) || empty($_POST['ce']) || empty($_POST['pay'])){
        $lName = $_POST['lName'];
        $fName = $_POST['fName'];
        $ccNr = $_POST['ccNr'];
        $cvc = $_POST['cvc'];
        $ce = $_POST['ce'];
        $pay = $_POST['pay'];
        echo "Fill all required fields!";
      }else{
        echo "Order Submited !!";
        $lName = $_POST['lName'];
        $fName = $_POST['fName'];
        $ccNr = $_POST['ccNr'];
        $cvc = $_POST['cvc'];
        $ce = $_POST['ce'];
        $pay = $_POST['pay'];
        $id = rand(1,500);
        
        $porosia = new Porosia($id,$fName,$lName,$pay,$ccNr,$cvc,$ce);
        
        $porosiaRepository = new PorosiaRepository;
        
        $porosiaRepository->insertPorosia($porosia);
      }
    }
      
?>