<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$admins  = array("Osama", "Hassan", "sayed");

	$username = $_POST['username'];

	if (in_array($username, $admins)) {

		echo "welcome " . $username . " To Control Panel For Admin";

	 }  else {


	 	echo "Sorry this Username Is Not Exit In Our Client Area";
	 }

	 }  else {

		   echo 'Sorry You Browse This Page Directly'

		   	}
