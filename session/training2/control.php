<?php

session_start();

if (isset($_SESSION['user'])) { 


	  echo 'Welcome ' . $_SESSION['user'] . ' You Are Admain';



	  echo '<pre>';


	  print_r($_SESSION);

	  echo '<pre>';


} else {

	echo 'you Are Not Permitted To See This Page';
}