<?php

 session_start();


 $admains = array("Osama", "Ahemd", "mohamed", "ali");

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $user = $_POST['username'];

      if(in_array($user, $admains)) {

      	// If IS Admain


      	$_SESSION['user'] = $user;
     echo 'welcome' . $_SESSION['user'] . ' You will Be Reqirected To Control Panal Area';

      header('REFRESH:3;URL=control.php'); 

 } else { 

       // If NOt Admin 
 	echo 'Sorry You Are NOt Admain And You Are Not permitted To See Control Panal';
 }

       
//echo $_SESSION['user'];

 } else {

 	echo 'Error: You Cantt Brwose This Psge Directly';
 }