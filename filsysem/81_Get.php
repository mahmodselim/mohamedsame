<?php
$admains  = array("Osama", "Hassan", "Sayed");

$username = $_POST['username'];
//$username = $_GET['username'];


if (in_array($username, $admains)) {

 echo "Welcome " . $username . "To Control Panel For Admin";
} else {
          echo "Sorry This username Is Not Exist In Our Client Area";
       }

