<?php

if(empty($_SESSION['counter'])) {

	$_SESSION['counter'] = 1;
} else {

       $_SESSION['counter']++;
}



echo '<div> you Viewed This Page  ' . $_SESSION['counter'] . ' Times'; 